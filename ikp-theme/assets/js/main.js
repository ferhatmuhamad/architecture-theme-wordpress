/**
 * IKP Theme — main.js
 *
 * Mobile menu toggle, header scroll shadow, smooth scroll.
 */

(function () {
	'use strict';

	// ── DOM ready ────────────────────────────────────────────
	document.addEventListener('DOMContentLoaded', function () {
		initMobileMenu();
		initHeaderScroll();
		initSmoothScroll();
	});

	// ── Mobile Menu Toggle ───────────────────────────────────
	function initMobileMenu() {
		var hamburger   = document.getElementById('ikp-hamburger');
		var mobileMenu  = document.getElementById('ikp-mobile-menu');
		var iconHamburger = document.getElementById('icon-hamburger');
		var iconClose     = document.getElementById('icon-close');

		if (!hamburger || !mobileMenu) return;

		hamburger.addEventListener('click', function () {
			var isOpen = mobileMenu.classList.contains('is-open');

			if (isOpen) {
				// Tutup menu
				mobileMenu.classList.remove('is-open');
				mobileMenu.classList.add('hidden');
				mobileMenu.setAttribute('aria-hidden', 'true');
				hamburger.setAttribute('aria-expanded', 'false');
				if (iconHamburger) iconHamburger.classList.remove('hidden');
				if (iconClose) iconClose.classList.add('hidden');
			} else {
				// Buka menu
				mobileMenu.classList.remove('hidden');
				// Trigger reflow agar animasi transition berjalan
				mobileMenu.offsetHeight; // eslint-disable-line no-unused-expressions
				mobileMenu.classList.add('is-open');
				mobileMenu.setAttribute('aria-hidden', 'false');
				hamburger.setAttribute('aria-expanded', 'true');
				if (iconHamburger) iconHamburger.classList.add('hidden');
				if (iconClose) iconClose.classList.remove('hidden');
			}
		});

		// Tutup menu ketika klik di luar
		document.addEventListener('click', function (e) {
			if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
				if (mobileMenu.classList.contains('is-open')) {
					mobileMenu.classList.remove('is-open');
					mobileMenu.classList.add('hidden');
					mobileMenu.setAttribute('aria-hidden', 'true');
					hamburger.setAttribute('aria-expanded', 'false');
					if (iconHamburger) iconHamburger.classList.remove('hidden');
					if (iconClose) iconClose.classList.add('hidden');
				}
			}
		});

		// Tutup menu ketika tekan Escape
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && mobileMenu.classList.contains('is-open')) {
				mobileMenu.classList.remove('is-open');
				mobileMenu.classList.add('hidden');
				hamburger.setAttribute('aria-expanded', 'false');
				hamburger.focus();
				if (iconHamburger) iconHamburger.classList.remove('hidden');
				if (iconClose) iconClose.classList.add('hidden');
			}
		});
	}

	// ── Header Shadow saat Scroll ────────────────────────────
	function initHeaderScroll() {
		var header = document.getElementById('ikp-header');
		if (!header) return;

		var lastScrollY = window.scrollY;

		function onScroll() {
			var currentScrollY = window.scrollY;

			if (currentScrollY > 20) {
				header.classList.add('scrolled');
			} else {
				header.classList.remove('scrolled');
			}

			lastScrollY = currentScrollY;
		}

		// Inisiasi saat load
		onScroll();

		window.addEventListener('scroll', onScroll, { passive: true });
	}

	// ── Smooth Scroll untuk anchor links ─────────────────────
	function initSmoothScroll() {
		var anchors = document.querySelectorAll('a[href^="#"]');
		var header  = document.getElementById('ikp-header');

		anchors.forEach(function (anchor) {
			anchor.addEventListener('click', function (e) {
				var href   = anchor.getAttribute('href');
				var target = document.querySelector(href);

				if (!target) return;

				e.preventDefault();

				var headerHeight = header ? header.offsetHeight : 0;
				var targetTop    = target.getBoundingClientRect().top + window.scrollY - headerHeight - 16;

				window.scrollTo({
					top:      targetTop,
					behavior: 'smooth',
				});

				// Tutup mobile menu jika sedang terbuka
				var mobileMenu = document.getElementById('ikp-mobile-menu');
				if (mobileMenu && mobileMenu.classList.contains('is-open')) {
					mobileMenu.classList.remove('is-open');
					mobileMenu.classList.add('hidden');
					var hamburger = document.getElementById('ikp-hamburger');
					if (hamburger) hamburger.setAttribute('aria-expanded', 'false');
					var iconHamburger = document.getElementById('icon-hamburger');
					var iconClose     = document.getElementById('icon-close');
					if (iconHamburger) iconHamburger.classList.remove('hidden');
					if (iconClose) iconClose.classList.add('hidden');
				}
			});
		});
	}

})();
