<?php
/**
 * IKP Theme — Custom Post Types
 *
 * Register CPT: proyek, artikel, layanan.
 *
 * @package ikp-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register semua Custom Post Types milik IKP theme.
 */
function ikp_register_post_types() {

	// ── CPT: Proyek ────────────────────────────────────────────────────────
	register_post_type(
		'proyek',
		array(
			'labels'        => array(
				'name'               => esc_html__( 'Proyek Kami', 'ikp-theme' ),
				'singular_name'      => esc_html__( 'Proyek', 'ikp-theme' ),
				'add_new'            => esc_html__( 'Tambah Proyek', 'ikp-theme' ),
				'add_new_item'       => esc_html__( 'Tambah Proyek Baru', 'ikp-theme' ),
				'edit_item'          => esc_html__( 'Edit Proyek', 'ikp-theme' ),
				'new_item'           => esc_html__( 'Proyek Baru', 'ikp-theme' ),
				'view_item'          => esc_html__( 'Lihat Proyek', 'ikp-theme' ),
				'search_items'       => esc_html__( 'Cari Proyek', 'ikp-theme' ),
				'not_found'          => esc_html__( 'Tidak ada proyek ditemukan.', 'ikp-theme' ),
				'not_found_in_trash' => esc_html__( 'Tidak ada proyek di tong sampah.', 'ikp-theme' ),
				'menu_name'          => esc_html__( 'Proyek Kami', 'ikp-theme' ),
			),
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => array( 'slug' => 'proyek' ),
			'show_in_rest'  => true,
			'supports'      => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'     => 'dashicons-building',
			'menu_position' => 5,
		)
	);

	// ── CPT: Artikel ──────────────────────────────────────────────────────
	register_post_type(
		'artikel',
		array(
			'labels'        => array(
				'name'               => esc_html__( 'Artikel', 'ikp-theme' ),
				'singular_name'      => esc_html__( 'Artikel', 'ikp-theme' ),
				'add_new'            => esc_html__( 'Tambah Artikel', 'ikp-theme' ),
				'add_new_item'       => esc_html__( 'Tambah Artikel Baru', 'ikp-theme' ),
				'edit_item'          => esc_html__( 'Edit Artikel', 'ikp-theme' ),
				'new_item'           => esc_html__( 'Artikel Baru', 'ikp-theme' ),
				'view_item'          => esc_html__( 'Lihat Artikel', 'ikp-theme' ),
				'search_items'       => esc_html__( 'Cari Artikel', 'ikp-theme' ),
				'not_found'          => esc_html__( 'Tidak ada artikel ditemukan.', 'ikp-theme' ),
				'not_found_in_trash' => esc_html__( 'Tidak ada artikel di tong sampah.', 'ikp-theme' ),
				'menu_name'          => esc_html__( 'Artikel', 'ikp-theme' ),
			),
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => array( 'slug' => 'artikel' ),
			'show_in_rest'  => true,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'menu_icon'     => 'dashicons-edit',
			'menu_position' => 6,
		)
	);

	// ── CPT: Layanan ──────────────────────────────────────────────────────
	register_post_type(
		'layanan',
		array(
			'labels'        => array(
				'name'               => esc_html__( 'Layanan', 'ikp-theme' ),
				'singular_name'      => esc_html__( 'Layanan', 'ikp-theme' ),
				'add_new'            => esc_html__( 'Tambah Layanan', 'ikp-theme' ),
				'add_new_item'       => esc_html__( 'Tambah Layanan Baru', 'ikp-theme' ),
				'edit_item'          => esc_html__( 'Edit Layanan', 'ikp-theme' ),
				'new_item'           => esc_html__( 'Layanan Baru', 'ikp-theme' ),
				'view_item'          => esc_html__( 'Lihat Layanan', 'ikp-theme' ),
				'search_items'       => esc_html__( 'Cari Layanan', 'ikp-theme' ),
				'not_found'          => esc_html__( 'Tidak ada layanan ditemukan.', 'ikp-theme' ),
				'not_found_in_trash' => esc_html__( 'Tidak ada layanan di tong sampah.', 'ikp-theme' ),
				'menu_name'          => esc_html__( 'Layanan', 'ikp-theme' ),
			),
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => array( 'slug' => 'layanan' ),
			'show_in_rest'  => true,
			'supports'      => array( 'title', 'editor', 'thumbnail' ),
			'menu_icon'     => 'dashicons-hammer',
			'menu_position' => 7,
		)
	);
}
add_action( 'init', 'ikp_register_post_types' );
