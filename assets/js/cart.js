'use strict';

/* ═══════════════════════════════════════════════════════════════
   Revenge Works — Shopping Cart Module
   Stored in localStorage. Drives cart badge, cart page, and checkout.
   ═══════════════════════════════════════════════════════════════ */

var RevengeCart = (function () {

  var STORAGE_KEY = 'revenge_cart';
  var FREE_SHIP = 4900; // cents

  // Product catalog (client-side copy for display — prices validated server-side)
  var PRODUCTS = {
    '32oz-spray': {
      name: 'Revenge! 32 oz Spray Bottle',
      size: '32 oz Trigger Sprayer',
      price: 1999,
      image: '/assets/img/32oz228kb.jpg',
    },
    'gallon-jug': {
      name: 'Revenge! 1 Gallon Refill Jug',
      size: '1 Gallon (128 oz)',
      price: 3999,
      image: '/assets/img/gallon317kb.jpg',
    },
  };

  // ── Storage helpers ──
  function getItems() {
    try {
      var raw = localStorage.getItem(STORAGE_KEY);
      return raw ? JSON.parse(raw) : [];
    } catch (e) { return []; }
  }

  function saveItems(items) {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(items));
    updateBadge();
  }

  // ── Public API ──
  function addItem(productId, qty) {
    if (!PRODUCTS[productId]) return;
    qty = Math.max(1, Math.floor(Number(qty) || 1));
    var items = getItems();
    var found = false;
    for (var i = 0; i < items.length; i++) {
      if (items[i].id === productId) {
        items[i].quantity = Math.min(99, items[i].quantity + qty);
        found = true;
        break;
      }
    }
    if (!found) {
      items.push({ id: productId, quantity: qty });
    }
    saveItems(items);
    return items;
  }

  function setQuantity(productId, qty) {
    qty = Math.max(0, Math.min(99, Math.floor(Number(qty) || 0)));
    var items = getItems();
    if (qty === 0) {
      items = items.filter(function (i) { return i.id !== productId; });
    } else {
      for (var i = 0; i < items.length; i++) {
        if (items[i].id === productId) {
          items[i].quantity = qty;
          break;
        }
      }
    }
    saveItems(items);
    return items;
  }

  function removeItem(productId) {
    var items = getItems().filter(function (i) { return i.id !== productId; });
    saveItems(items);
    return items;
  }

  function clear() {
    localStorage.removeItem(STORAGE_KEY);
    updateBadge();
  }

  function getCount() {
    var items = getItems();
    var count = 0;
    for (var i = 0; i < items.length; i++) count += items[i].quantity;
    return count;
  }

  function getSubtotal() {
    var items = getItems();
    var total = 0;
    for (var i = 0; i < items.length; i++) {
      var p = PRODUCTS[items[i].id];
      if (p) total += p.price * items[i].quantity;
    }
    return total;
  }

  function formatPrice(cents) {
    return '$' + (cents / 100).toFixed(2);
  }

  // ── Badge updater — finds all .cart-count elements ──
  function updateBadge() {
    var count = getCount();
    var badges = document.querySelectorAll('.cart-count');
    for (var i = 0; i < badges.length; i++) {
      badges[i].textContent = count;
      if (count > 0) {
        badges[i].classList.remove('hidden');
      } else {
        badges[i].classList.add('hidden');
      }
    }
  }

  // ── Toast notification ──
  function showToast(message) {
    var existing = document.getElementById('cart-toast');
    if (existing) existing.remove();

    var toast = document.createElement('div');
    toast.id = 'cart-toast';
    toast.className = 'fixed bottom-6 right-6 z-[9999] bg-slate-900 text-white px-6 py-4 rounded-xl shadow-2xl flex items-center gap-3 transform translate-y-4 opacity-0 transition-all duration-300';
    toast.innerHTML =
      '<svg class="w-5 h-5 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>' +
      '<span class="font-medium text-sm">' + message + '</span>' +
      '<a href="/cart.html" class="ml-3 text-sm font-bold text-red-400 hover:text-red-300 underline whitespace-nowrap">View Cart</a>';
    document.body.appendChild(toast);

    requestAnimationFrame(function () {
      requestAnimationFrame(function () {
        toast.style.transform = 'translateY(0)';
        toast.style.opacity = '1';
      });
    });

    setTimeout(function () {
      toast.style.transform = 'translateY(4px)';
      toast.style.opacity = '0';
      setTimeout(function () { toast.remove(); }, 300);
    }, 3500);
  }

  // ── Checkout — call serverless function ──
  function checkout() {
    var items = getItems();
    if (items.length === 0) return Promise.reject('Cart is empty');

    var payload = [];
    for (var i = 0; i < items.length; i++) {
      payload.push({ id: items[i].id, quantity: items[i].quantity });
    }

    return fetch('/api/create-checkout-session', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ items: payload }),
    })
    .then(function (res) { return res.json(); })
    .then(function (data) {
      if (data.url) {
        window.location.href = data.url;
      } else {
        throw new Error(data.error || 'Checkout failed');
      }
    });
  }

  // ── Init: bind Add to Cart buttons & update badge on page load ──
  function init() {
    updateBadge();

    document.querySelectorAll('[data-add-to-cart]').forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        var productId = this.getAttribute('data-add-to-cart');
        var qty = Number(this.getAttribute('data-qty')) || 1;
        addItem(productId, qty);
        var p = PRODUCTS[productId];
        showToast(p ? p.name + ' added to cart' : 'Added to cart');
      });
    });
  }

  return {
    PRODUCTS: PRODUCTS,
    FREE_SHIP: FREE_SHIP,
    getItems: getItems,
    addItem: addItem,
    setQuantity: setQuantity,
    removeItem: removeItem,
    clear: clear,
    getCount: getCount,
    getSubtotal: getSubtotal,
    formatPrice: formatPrice,
    updateBadge: updateBadge,
    showToast: showToast,
    checkout: checkout,
    init: init,
  };

})();

document.addEventListener('DOMContentLoaded', function () { RevengeCart.init(); });
