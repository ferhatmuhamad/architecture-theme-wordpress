<?php
/**
 * IKP Theme — Theme Setup
 *
 * Konfigurasi dasar theme: theme support, nav menus, dan image sizes.
 *
 * @package ikp-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup theme features.
 */
function ikp_theme_setup() {
	// Izinkan WordPress mengelola <title> tag secara otomatis.
	add_theme_support( 'title-tag' );

	// Aktifkan dukungan featured image / post thumbnail.
	add_theme_support( 'post-thumbnails' );

	// HTML5 markup untuk komponen tertentu.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	// Dukungan custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Responsive embeds (video, dll).
	add_theme_support( 'responsive-embeds' );

	// Editor color palette (Gutenberg).
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Primary (Biru)', 'ikp-theme' ),
				'slug'  => 'primary',
				'color' => '#336FA2',
			),
			array(
				'name'  => esc_html__( 'Secondary (Merah)', 'ikp-theme' ),
				'slug'  => 'secondary',
				'color' => '#CC191A',
			),
			array(
				'name'  => esc_html__( 'Tertiary (Hijau)', 'ikp-theme' ),
				'slug'  => 'tertiary',
				'color' => '#6B982F',
			),
		)
	);

	// Daftarkan lokasi menu navigasi.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Header Menu', 'ikp-theme' ),
			'footer'  => esc_html__( 'Footer Menu', 'ikp-theme' ),
		)
	);

	// Load text domain untuk terjemahan.
	load_theme_textdomain( 'ikp-theme', IKP_THEME_PATH . '/languages' );
}
add_action( 'after_setup_theme', 'ikp_theme_setup' );

/**
 * Daftarkan ukuran gambar kustom.
 */
function ikp_add_image_sizes() {
	add_image_size( 'ikp-card', 600, 400, true );
	add_image_size( 'ikp-hero', 1920, 1080, true );
	add_image_size( 'ikp-thumb', 300, 200, true );
}
add_action( 'after_setup_theme', 'ikp_add_image_sizes' );
