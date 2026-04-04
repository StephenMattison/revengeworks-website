export async function onRequestPost(context) {
  const STRIPE_SECRET_KEY = context.env.STRIPE_SECRET_KEY;
  const SITE_URL = 'https://www.revengeworks.com';

  // ── Server-side product catalog (prices NEVER come from the client) ──
  const PRODUCTS = {
    '32oz-spray': {
      name: 'Revenge! 32 oz Spray Bottle',
      description: 'Professional Strength Pet Odor & Stain Remover — 32 oz Trigger Sprayer',
      price: 1999,
      image: SITE_URL + '/assets/img/32oz228kb.jpg',
    },
    'gallon-jug': {
      name: 'Revenge! 1 Gallon Refill Jug',
      description: 'Professional Strength Pet Odor & Stain Remover — 1 Gallon (128 oz)',
      price: 3999,
      image: SITE_URL + '/assets/img/gallon317kb.jpg',
    },
  };

  // ── Shipping rates (cents) ──
  const SHIPPING_STANDARD = 599;
  const SHIPPING_EXPEDITED = 1299;
  const SHIPPING_PRIORITY = 2499;
  const FREE_SHIPPING_THRESHOLD = 4900;

  // ── CORS headers ──
  const corsHeaders = {
    'Access-Control-Allow-Origin': SITE_URL,
    'Access-Control-Allow-Methods': 'POST, OPTIONS',
    'Access-Control-Allow-Headers': 'Content-Type',
  };

  if (context.request.method === 'OPTIONS') {
    return new Response(null, { status: 204, headers: corsHeaders });
  }

  try {
    const { items } = await context.request.json();

    if (!Array.isArray(items) || items.length === 0) {
      return Response.json({ error: 'Cart is empty.' }, { status: 400, headers: corsHeaders });
    }

    if (items.length > 10) {
      return Response.json({ error: 'Too many items.' }, { status: 400, headers: corsHeaders });
    }

    // ── Build line items & calculate subtotal ──
    const lineItems = [];
    let subtotal = 0;

    for (const item of items) {
      const product = PRODUCTS[item.id];
      if (!product) {
        return Response.json({ error: 'Invalid product: ' + item.id }, { status: 400, headers: corsHeaders });
      }
      const qty = Math.max(1, Math.min(99, Math.floor(Number(item.quantity) || 1)));
      subtotal += product.price * qty;
      lineItems.push({ product, qty });
    }

    // ── Build Stripe API params (form-encoded) ──
    const params = new URLSearchParams();
    params.append('mode', 'payment');
    params.append('success_url', SITE_URL + '/checkout-success.html?session_id={CHECKOUT_SESSION_ID}');
    params.append('cancel_url', SITE_URL + '/cart.html?cancelled=1');
    params.append('customer_creation', 'always');
    params.append('billing_address_collection', 'required');
    params.append('phone_number_collection[enabled]', 'true');
    params.append('shipping_address_collection[allowed_countries][0]', 'US');
    params.append('payment_method_types[0]', 'card');
    params.append('metadata[source]', 'revengeworks.com');

    // Line items
    for (let i = 0; i < lineItems.length; i++) {
      const li = lineItems[i];
      params.append(`line_items[${i}][price_data][currency]`, 'usd');
      params.append(`line_items[${i}][price_data][unit_amount]`, String(li.product.price));
      params.append(`line_items[${i}][price_data][product_data][name]`, li.product.name);
      params.append(`line_items[${i}][price_data][product_data][description]`, li.product.description);
      params.append(`line_items[${i}][price_data][product_data][images][0]`, li.product.image);
      params.append(`line_items[${i}][quantity]`, String(li.qty));
    }

    // Shipping options
    if (subtotal >= FREE_SHIPPING_THRESHOLD) {
      params.append('shipping_options[0][shipping_rate_data][display_name]', 'Free Standard Shipping');
      params.append('shipping_options[0][shipping_rate_data][type]', 'fixed_amount');
      params.append('shipping_options[0][shipping_rate_data][fixed_amount][amount]', '0');
      params.append('shipping_options[0][shipping_rate_data][fixed_amount][currency]', 'usd');
      params.append('shipping_options[0][shipping_rate_data][delivery_estimate][minimum][unit]', 'business_day');
      params.append('shipping_options[0][shipping_rate_data][delivery_estimate][minimum][value]', '3');
      params.append('shipping_options[0][shipping_rate_data][delivery_estimate][maximum][unit]', 'business_day');
      params.append('shipping_options[0][shipping_rate_data][delivery_estimate][maximum][value]', '5');

      params.append('shipping_options[1][shipping_rate_data][display_name]', 'Expedited Shipping');
      params.append('shipping_options[1][shipping_rate_data][type]', 'fixed_amount');
      params.append('shipping_options[1][shipping_rate_data][fixed_amount][amount]', String(SHIPPING_EXPEDITED));
      params.append('shipping_options[1][shipping_rate_data][fixed_amount][currency]', 'usd');
      params.append('shipping_options[1][shipping_rate_data][delivery_estimate][minimum][unit]', 'business_day');
      params.append('shipping_options[1][shipping_rate_data][delivery_estimate][minimum][value]', '2');
      params.append('shipping_options[1][shipping_rate_data][delivery_estimate][maximum][unit]', 'business_day');
      params.append('shipping_options[1][shipping_rate_data][delivery_estimate][maximum][value]', '3');

      params.append('shipping_options[2][shipping_rate_data][display_name]', 'Priority / Overnight');
      params.append('shipping_options[2][shipping_rate_data][type]', 'fixed_amount');
      params.append('shipping_options[2][shipping_rate_data][fixed_amount][amount]', String(SHIPPING_PRIORITY));
      params.append('shipping_options[2][shipping_rate_data][fixed_amount][currency]', 'usd');
      params.append('shipping_options[2][shipping_rate_data][delivery_estimate][minimum][unit]', 'business_day');
      params.append('shipping_options[2][shipping_rate_data][delivery_estimate][minimum][value]', '1');
      params.append('shipping_options[2][shipping_rate_data][delivery_estimate][maximum][unit]', 'business_day');
      params.append('shipping_options[2][shipping_rate_data][delivery_estimate][maximum][value]', '2');
    } else {
      params.append('shipping_options[0][shipping_rate_data][display_name]', 'Standard Shipping');
      params.append('shipping_options[0][shipping_rate_data][type]', 'fixed_amount');
      params.append('shipping_options[0][shipping_rate_data][fixed_amount][amount]', String(SHIPPING_STANDARD));
      params.append('shipping_options[0][shipping_rate_data][fixed_amount][currency]', 'usd');
      params.append('shipping_options[0][shipping_rate_data][delivery_estimate][minimum][unit]', 'business_day');
      params.append('shipping_options[0][shipping_rate_data][delivery_estimate][minimum][value]', '3');
      params.append('shipping_options[0][shipping_rate_data][delivery_estimate][maximum][unit]', 'business_day');
      params.append('shipping_options[0][shipping_rate_data][delivery_estimate][maximum][value]', '5');

      params.append('shipping_options[1][shipping_rate_data][display_name]', 'Expedited Shipping');
      params.append('shipping_options[1][shipping_rate_data][type]', 'fixed_amount');
      params.append('shipping_options[1][shipping_rate_data][fixed_amount][amount]', String(SHIPPING_EXPEDITED));
      params.append('shipping_options[1][shipping_rate_data][fixed_amount][currency]', 'usd');
      params.append('shipping_options[1][shipping_rate_data][delivery_estimate][minimum][unit]', 'business_day');
      params.append('shipping_options[1][shipping_rate_data][delivery_estimate][minimum][value]', '2');
      params.append('shipping_options[1][shipping_rate_data][delivery_estimate][maximum][unit]', 'business_day');
      params.append('shipping_options[1][shipping_rate_data][delivery_estimate][maximum][value]', '3');

      params.append('shipping_options[2][shipping_rate_data][display_name]', 'Priority / Overnight');
      params.append('shipping_options[2][shipping_rate_data][type]', 'fixed_amount');
      params.append('shipping_options[2][shipping_rate_data][fixed_amount][amount]', String(SHIPPING_PRIORITY));
      params.append('shipping_options[2][shipping_rate_data][fixed_amount][currency]', 'usd');
      params.append('shipping_options[2][shipping_rate_data][delivery_estimate][minimum][unit]', 'business_day');
      params.append('shipping_options[2][shipping_rate_data][delivery_estimate][minimum][value]', '1');
      params.append('shipping_options[2][shipping_rate_data][delivery_estimate][maximum][unit]', 'business_day');
      params.append('shipping_options[2][shipping_rate_data][delivery_estimate][maximum][value]', '2');
    }

    // ── Call Stripe API ──
    const stripeRes = await fetch('https://api.stripe.com/v1/checkout/sessions', {
      method: 'POST',
      headers: {
        'Authorization': 'Bearer ' + STRIPE_SECRET_KEY,
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: params.toString(),
    });

    const session = await stripeRes.json();

    if (!stripeRes.ok) {
      console.error('Stripe error:', JSON.stringify(session));
      return Response.json(
        { error: 'Payment service error. Please try again.' },
        { status: 502, headers: corsHeaders }
      );
    }

    return Response.json({ url: session.url }, { status: 200, headers: corsHeaders });

  } catch (err) {
    console.error('Checkout error:', err);
    return Response.json(
      { error: 'Something went wrong. Please try again.' },
      { status: 500, headers: corsHeaders }
    );
  }
}

export async function onRequestOptions() {
  return new Response(null, {
    status: 204,
    headers: {
      'Access-Control-Allow-Origin': 'https://www.revengeworks.com',
      'Access-Control-Allow-Methods': 'POST, OPTIONS',
      'Access-Control-Allow-Headers': 'Content-Type',
    },
  });
}
