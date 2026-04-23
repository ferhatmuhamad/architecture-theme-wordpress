<?php
/**
 * IKP Theme — ACF Field Groups
 *
 * Mendaftarkan semua field group ACF via PHP agar tidak butuh import JSON.
 * Semua field group dibungkus dengan pengecekan function_exists('acf_add_local_field_group')
 * sehingga tidak error jika ACF belum terinstall.
 *
 * @package ikp-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Daftarkan semua ACF field groups.
 */
function ikp_register_acf_fields() {

	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	// ── Field Group: Homepage ────────────────────────────────────────────
	acf_add_local_field_group(
		array(
			'key'      => 'group_ikp_homepage',
			'title'    => 'Homepage — Konten Utama',
			'location' => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'front-page.php',
					),
				),
				array(
					array(
						'param'    => 'page_type',
						'operator' => '==',
						'value'    => 'front_page',
					),
				),
			),
			'menu_order' => 0,
			'fields'   => array(

				// ── Tab: Hero ─────────────────────────────────────────────
				array(
					'key'   => 'field_ikp_tab_hero',
					'label' => 'Section: Hero',
					'name'  => '',
					'type'  => 'tab',
				),
				array(
					'key'           => 'field_ikp_hero_eyebrow',
					'label'         => 'Hero — Eyebrow Text',
					'name'          => 'hero_eyebrow',
					'type'          => 'text',
					'default_value' => 'General Supplier, Architecture and Kontraktor',
					'placeholder'   => 'Teks kecil di atas judul utama',
				),
				array(
					'key'           => 'field_ikp_hero_title',
					'label'         => 'Hero — Judul Utama',
					'name'          => 'hero_title',
					'type'          => 'text',
					'default_value' => 'Penyedia Jasa Konstruksi & Renovasi Bangunan Terpercaya',
				),
				array(
					'key'         => 'field_ikp_hero_subtitle',
					'label'       => 'Hero — Subtitle',
					'name'        => 'hero_subtitle',
					'type'        => 'textarea',
					'rows'        => 3,
					'placeholder' => 'Deskripsi singkat di bawah judul hero',
				),
				array(
					'key'           => 'field_ikp_hero_cta_text',
					'label'         => 'Hero — Teks CTA Button',
					'name'          => 'hero_cta_text',
					'type'          => 'text',
					'default_value' => 'Konsultasi Sekarang',
				),
				array(
					'key'   => 'field_ikp_hero_cta_link',
					'label' => 'Hero — Link CTA Button',
					'name'  => 'hero_cta_link',
					'type'  => 'url',
				),
				array(
					'key'           => 'field_ikp_hero_background',
					'label'         => 'Hero — Background Image',
					'name'          => 'hero_background',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
				),

				// ── Tab: Tentang ──────────────────────────────────────────
				array(
					'key'   => 'field_ikp_tab_tentang',
					'label' => 'Section: Tentang Singkat',
					'name'  => '',
					'type'  => 'tab',
				),
				array(
					'key'           => 'field_ikp_tentang_eyebrow',
					'label'         => 'Tentang — Eyebrow',
					'name'          => 'tentang_eyebrow',
					'type'          => 'text',
					'default_value' => 'Tentang Kami',
				),
				array(
					'key'           => 'field_ikp_tentang_title',
					'label'         => 'Tentang — Judul',
					'name'          => 'tentang_title',
					'type'          => 'text',
					'default_value' => 'Kami Siap Mewujudkan Impian Anda',
				),
				array(
					'key'  => 'field_ikp_tentang_text',
					'label' => 'Tentang — Teks Deskripsi',
					'name' => 'tentang_text',
					'type' => 'textarea',
					'rows' => 5,
				),
				array(
					'key'           => 'field_ikp_tentang_image',
					'label'         => 'Tentang — Gambar',
					'name'          => 'tentang_image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'medium',
				),

				// ── Tab: Keunggulan ───────────────────────────────────────
				array(
					'key'   => 'field_ikp_tab_keunggulan',
					'label' => 'Section: Keunggulan',
					'name'  => '',
					'type'  => 'tab',
				),
				array(
					'key'        => 'field_ikp_keunggulan_items',
					'label'      => 'Keunggulan — Item List',
					'name'       => 'keunggulan_items',
					'type'       => 'repeater',
					'min'        => 1,
					'max'        => 12,
					'layout'     => 'block',
					'button_label' => 'Tambah Keunggulan',
					'sub_fields' => array(
						array(
							'key'   => 'field_ikp_keunggulan_icon',
							'label' => 'Icon (Dashicon class, contoh: dashicons-yes)',
							'name'  => 'icon',
							'type'  => 'text',
						),
						array(
							'key'   => 'field_ikp_keunggulan_title',
							'label' => 'Judul Keunggulan',
							'name'  => 'title',
							'type'  => 'text',
						),
						array(
							'key'   => 'field_ikp_keunggulan_desc',
							'label' => 'Deskripsi',
							'name'  => 'description',
							'type'  => 'textarea',
							'rows'  => 2,
						),
						array(
							'key'           => 'field_ikp_keunggulan_highlight',
							'label'         => 'Highlight (background hijau)?',
							'name'          => 'highlight',
							'type'          => 'true_false',
							'default_value' => 0,
							'ui'            => 1,
						),
					),
				),
			),
		)
	);

	// ── Field Group: CPT Proyek ──────────────────────────────────────────
	acf_add_local_field_group(
		array(
			'key'      => 'group_ikp_proyek',
			'title'    => 'Detail Proyek',
			'location' => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'proyek',
					),
				),
			),
			'fields'   => array(
				array(
					'key'   => 'field_ikp_proyek_lokasi',
					'label' => 'Lokasi Proyek',
					'name'  => 'proyek_lokasi',
					'type'  => 'text',
				),
				array(
					'key'   => 'field_ikp_proyek_tahun',
					'label' => 'Tahun Pengerjaan',
					'name'  => 'proyek_tahun',
					'type'  => 'number',
					'min'   => 2000,
					'max'   => 2099,
				),
				array(
					'key'   => 'field_ikp_proyek_klien',
					'label' => 'Nama Klien',
					'name'  => 'proyek_klien',
					'type'  => 'text',
				),
				array(
					'key'     => 'field_ikp_proyek_kategori',
					'label'   => 'Kategori Proyek',
					'name'    => 'proyek_kategori',
					'type'    => 'select',
					'choices' => array(
						'perumahan'  => 'Perumahan',
						'non-estate' => 'Non-Estate',
						'renovasi'   => 'Renovasi',
						'lainnya'    => 'Lainnya',
					),
					'default_value' => 'perumahan',
					'allow_null'    => 0,
					'multiple'      => 0,
					'ui'            => 1,
				),
				array(
					'key'           => 'field_ikp_proyek_galeri',
					'label'         => 'Galeri Foto Proyek',
					'name'          => 'proyek_galeri',
					'type'          => 'gallery',
					'return_format' => 'array',
					'preview_size'  => 'medium',
					'insert'        => 'append',
				),
			),
		)
	);
}
add_action( 'acf/init', 'ikp_register_acf_fields' );
