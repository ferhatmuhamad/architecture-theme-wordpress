<?php
/**
 * IKP Theme — Enqueue Scripts & Styles
 *
 * @package ikp-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue semua script dan stylesheet theme.
 */
function ikp_enqueue_assets() {
	// ── Google Fonts: Poppins ──────────────────────────────────────────────
	wp_enqueue_style(
		'ikp-google-fonts',
		'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap',
		array(),
		null
	);

	// ── Tailwind CSS via CDN ───────────────────────────────────────────────
	wp_enqueue_script(
		'tailwind',
		'https://cdn.tailwindcss.com',
		array(),
		null,
		false
	);

	// Konfigurasi Tailwind: extend warna brand IKP.
	wp_add_inline_script(
		'tailwind',
		"tailwind.config = {
			theme: {
				extend: {
					colors: {
						primary:   '#336FA2',
						secondary: '#CC191A',
						tertiary:  '#6B982F',
					},
					fontFamily: {
						sans: ['Poppins', 'ui-sans-serif', 'system-ui', 'sans-serif'],
					},
				},
			},
		};",
		'after'
	);

	// ── Custom CSS ────────────────────────────────────────────────────────
	wp_enqueue_style(
		'ikp-custom',
		IKP_THEME_URI . '/assets/css/custom.css',
		array(),
		IKP_THEME_VERSION
	);

	// ── Main JS ───────────────────────────────────────────────────────────
	wp_enqueue_script(
		'ikp-main',
		IKP_THEME_URI . '/assets/js/main.js',
		array(),
		IKP_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'ikp_enqueue_assets' );
