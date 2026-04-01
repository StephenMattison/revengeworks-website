'use strict';
document.addEventListener('DOMContentLoaded', function () {

  // ── Mobile Menu Toggle ──
  var menuBtn = document.getElementById('mobile-menu-btn');
  var mobileMenu = document.getElementById('mobile-menu');
  var openIcon = document.getElementById('menu-open-icon');
  var closeIcon = document.getElementById('menu-close-icon');
  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', function () {
      var isOpen = !mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden');
      if (openIcon) openIcon.classList.toggle('hidden', !isOpen);
      if (closeIcon) closeIcon.classList.toggle('hidden', isOpen);
    });
  }

  // ── Header Shadow on Scroll ──
  var header = document.getElementById('main-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 20);
    }, { passive: true });
  }

  // ── Fade-up on Scroll ──
  var fadeEls = document.querySelectorAll('.fade-up');
  if (fadeEls.length && 'IntersectionObserver' in window) {
    var obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          obs.unobserve(e.target);
        }
      });
    }, { threshold: 0.15 });
    fadeEls.forEach(function (el) { obs.observe(el); });
  }

  // ── FAQ Accordion ──
  document.querySelectorAll('.faq-toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var answer = this.nextElementSibling;
      var chevron = this.querySelector('.faq-chevron');
      var isOpen = answer.classList.contains('open');
      // Close all others
      document.querySelectorAll('.faq-answer.open').forEach(function (a) {
        a.classList.remove('open');
        a.style.padding = '';
        var ch = a.previousElementSibling.querySelector('.faq-chevron');
        if (ch) ch.classList.remove('rotated');
      });
      if (!isOpen) {
        answer.classList.add('open');
        answer.style.padding = '0 0 1rem 0';
        if (chevron) chevron.classList.add('rotated');
      }
    });
  });

  // ── Contact Form ──
  var contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var btn = contactForm.querySelector('button[type="submit"]');
      var msg = document.getElementById('form-success');
      if (btn) { btn.textContent = 'Sending...'; btn.disabled = true; }
      setTimeout(function () {
        contactForm.reset();
        if (btn) { btn.textContent = 'Send Message'; btn.disabled = false; }
        if (msg) { msg.classList.remove('hidden'); }
        setTimeout(function () { if (msg) msg.classList.add('hidden'); }, 5000);
      }, 1200);
    });
  }

  // ── Stripe Buy Now Buttons ──
  document.querySelectorAll('[data-stripe-link]').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      var link = this.getAttribute('data-stripe-link');
      if (link && link !== '#') {
        e.preventDefault();
        this.classList.add('btn-loading');
        window.location.href = link;
      }
    });
  });

});