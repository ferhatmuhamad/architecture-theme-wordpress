<?php
/**
 * IKP Theme — Helper Functions
 *
 * Kumpulan fungsi pembantu yang digunakan di berbagai template.
 *
 * @package ikp-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Ambil nilai ACF atau kembalikan default jika kosong / ACF tidak aktif.
 *
 * @param string $field_name Nama field ACF.
 * @param int    $post_id    Post ID (default: current post).
 * @param mixed  $default    Nilai default jika field kosong.
 * @return mixed
 */
function ikp_get_field( $field_name, $post_id = false, $default = '' ) {
	if ( ! function_exists( 'get_field' ) ) {
		return $default;
	}

	$value = get_field( $field_name, $post_id );

	return ! empty( $value ) ? $value : $default;
}

/**
 * Render gambar dari array ACF image field atau fallback ke URL Unsplash.
 *
 * @param array|false $image       Array ACF image (url, alt, title).
 * @param string      $fallback_url URL fallback jika field kosong.
 * @param string      $fallback_alt Alt text fallback.
 * @param string      $class        Class CSS untuk tag <img>.
 * @param string      $size         Ukuran gambar ACF (default: 'large').
 * @return string HTML img tag.
 */
function ikp_render_image( $image, $fallback_url = '', $fallback_alt = '', $class = '', $size = 'large' ) {
	if ( ! empty( $image ) && is_array( $image ) ) {
		$url = isset( $image['sizes'][ $size ] ) ? $image['sizes'][ $size ] : $image['url'];
		$alt = isset( $image['alt'] ) ? $image['alt'] : $fallback_alt;
		return '<img src="' . esc_url( $url ) . '" alt="' . esc_attr( $alt ) . '" class="' . esc_attr( $class ) . '" loading="lazy">';
	}

	if ( ! empty( $fallback_url ) ) {
		return '<img src="' . esc_url( $fallback_url ) . '" alt="' . esc_attr( $fallback_alt ) . '" class="' . esc_attr( $class ) . '" loading="lazy">';
	}

	return '';
}

/**
 * Ambil URL background image untuk inline style.
 * Mengembalikan style string: background-image: url(...)
 *
 * @param array|false $image       Array ACF image.
 * @param string      $fallback_url URL fallback.
 * @return string
 */
function ikp_bg_image_style( $image, $fallback_url = '' ) {
	if ( ! empty( $image ) && is_array( $image ) ) {
		$url = $image['url'];
	} elseif ( ! empty( $fallback_url ) ) {
		$url = $fallback_url;
	} else {
		return '';
	}

	return 'background-image: url(' . esc_url( $url ) . ');';
}

/**
 * Render logo site: custom logo WP atau teks fallback.
 *
 * @return string HTML markup logo.
 */
function ikp_render_logo() {
	if ( has_custom_logo() ) {
		return get_custom_logo();
	}

	// Fallback: logo SVG placeholder
	$logo_path = IKP_THEME_URI . '/assets/images/logo-placeholder.svg';
	return '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home" class="flex items-center gap-2">'
		. '<img src="' . esc_url( $logo_path ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="h-12 w-auto" width="200" height="48">'
		. '</a>';
}

/**
 * Ambil excerpt manual dengan panjang tertentu.
 *
 * @param int    $post_id Post ID.
 * @param int    $length  Jumlah karakter (default 120).
 * @param string $more    Suffix jika dipotong (default '...').
 * @return string
 */
function ikp_get_excerpt( $post_id, $length = 120, $more = '...' ) {
	$post = get_post( $post_id );
	if ( ! $post ) {
		return '';
	}

	// Gunakan excerpt jika ada, lain gunakan konten.
	$text = has_excerpt( $post_id )
		? get_the_excerpt( $post )
		: wp_strip_all_tags( $post->post_content );

	if ( mb_strlen( $text ) > $length ) {
		$text = mb_substr( $text, 0, $length ) . $more;
	}

	return esc_html( $text );
}
