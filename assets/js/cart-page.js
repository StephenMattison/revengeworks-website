'use strict';

/* ═══════════════════════════════════════════════════════════════
   Cart Page — renders line items, quantities, totals, checkout
   Depends on: RevengeCart (cart.js must load first)
   ═══════════════════════════════════════════════════════════════ */

(function () {
  var PRODUCTS = RevengeCart.PRODUCTS;

  function render() {
    var items = RevengeCart.getItems();
    var emptyEl = document.getElementById('cart-empty');
    var itemsEl = document.getElementById('cart-items');
    var lineEl = document.getElementById('cart-line-items');

    if (items.length === 0) {
      emptyEl.classList.remove('hidden');
      itemsEl.classList.add('hidden');
      return;
    }
    emptyEl.classList.add('hidden');
    itemsEl.classList.remove('hidden');

    var html = '';
    for (var i = 0; i < items.length; i++) {
      var item = items[i];
      var p = PRODUCTS[item.id];
      if (!p) continue;
      var lineTotal = p.price * item.quantity;
      html +=
        '<div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center px-6 py-5 border-b border-slate-100 last:border-0" data-product="' + item.id + '">' +
        '<div class="md:col-span-6 flex items-center gap-4">' +
        '<img src="' + p.image + '" alt="' + p.name + '" class="w-20 h-20 object-contain rounded-lg bg-slate-50 border border-slate-100 p-1">' +
        '<div>' +
        '<h3 class="font-bold text-slate-900">' + p.name + '</h3>' +
        '<p class="text-sm text-slate-500">' + p.size + '</p>' +
        '<button class="remove-btn text-xs text-red-500 hover:text-red-700 font-medium mt-1 transition-colors" data-remove="' + item.id + '">Remove</button>' +
        '</div>' +
        '</div>' +
        '<div class="md:col-span-2 text-center">' +
        '<span class="md:hidden text-xs text-slate-500 mr-2">Price:</span>' +
        '<span class="font-semibold text-slate-700">' + RevengeCart.formatPrice(p.price) + '</span>' +
        '</div>' +
        '<div class="md:col-span-2 flex items-center justify-center">' +
        '<div class="inline-flex items-center border border-slate-200 rounded-lg overflow-hidden">' +
        '<button class="qty-btn px-3 py-2 text-slate-600 hover:bg-slate-100 transition-colors text-sm font-bold" data-action="decrease" data-product-id="' + item.id + '">&minus;</button>' +
        '<input type="number" min="1" max="99" value="' + item.quantity + '" class="qty-input w-12 text-center border-x border-slate-200 py-2 text-sm font-semibold text-slate-900 focus:outline-none [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" data-product-id="' + item.id + '">' +
        '<button class="qty-btn px-3 py-2 text-slate-600 hover:bg-slate-100 transition-colors text-sm font-bold" data-action="increase" data-product-id="' + item.id + '">+</button>' +
        '</div>' +
        '</div>' +
        '<div class="md:col-span-2 text-right">' +
        '<span class="md:hidden text-xs text-slate-500 mr-2">Total:</span>' +
        '<span class="font-bold text-slate-900">' + RevengeCart.formatPrice(lineTotal) + '</span>' +
        '</div>' +
        '</div>';
    }
    lineEl.innerHTML = html;

    // Update summary
    var subtotal = RevengeCart.getSubtotal();
    document.getElementById('cart-subtotal').textContent = RevengeCart.formatPrice(subtotal);

    var freeShipMsg = document.getElementById('free-ship-msg');
    if (subtotal >= RevengeCart.FREE_SHIP) {
      document.getElementById('cart-shipping').textContent = 'Free!';
      document.getElementById('cart-shipping').className = 'font-semibold text-emerald-600';
      freeShipMsg.textContent = '\u2713 You qualify for free standard shipping!';
      document.getElementById('cart-total').textContent = RevengeCart.formatPrice(subtotal);
    } else {
      document.getElementById('cart-shipping').textContent = 'From $5.99';
      document.getElementById('cart-shipping').className = 'text-slate-500';
      var remaining = RevengeCart.FREE_SHIP - subtotal;
      freeShipMsg.textContent = 'Add ' + RevengeCart.formatPrice(remaining) + ' more for free shipping';
      document.getElementById('cart-total').textContent = RevengeCart.formatPrice(subtotal) + '+';
    }

    bindEvents();
  }

  function bindEvents() {
    // Quantity buttons
    document.querySelectorAll('.qty-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var id = this.getAttribute('data-product-id');
        var action = this.getAttribute('data-action');
        var items = RevengeCart.getItems();
        for (var i = 0; i < items.length; i++) {
          if (items[i].id === id) {
            var newQty = action === 'increase' ? items[i].quantity + 1 : items[i].quantity - 1;
            if (newQty < 1) newQty = 1;
            RevengeCart.setQuantity(id, newQty);
            break;
          }
        }
        render();
      });
    });

    // Quantity input direct edit
    document.querySelectorAll('.qty-input').forEach(function (input) {
      input.addEventListener('change', function () {
        var id = this.getAttribute('data-product-id');
        var val = Math.max(1, Math.min(99, Math.floor(Number(this.value) || 1)));
        RevengeCart.setQuantity(id, val);
        render();
      });
    });

    // Remove buttons
    document.querySelectorAll('.remove-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var id = this.getAttribute('data-remove');
        RevengeCart.removeItem(id);
        render();
      });
    });
  }

  // Checkout button
  document.getElementById('checkout-btn').addEventListener('click', function () {
    var btn = this;
    btn.disabled = true;
    btn.innerHTML = '<svg class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Redirecting to secure checkout...';
    RevengeCart.checkout().catch(function (err) {
      btn.disabled = false;
      btn.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg> Proceed to Secure Checkout';
      alert('Checkout error: ' + (err.message || err) + '. Please try again.');
    });
  });

  // Show cancelled notice if returning from cancelled Stripe checkout
  if (window.location.search.indexOf('cancelled=1') !== -1) {
    var notice = document.getElementById('cancel-notice');
    if (notice) notice.classList.remove('hidden');
    if (window.history.replaceState) {
      window.history.replaceState({}, '', '/cart.html');
    }
  }

  render();
})();
