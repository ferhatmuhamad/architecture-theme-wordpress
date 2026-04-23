<?php
/**
 * IKP Theme — functions.php
 *
 * Entry point theme. Mendefine konstanta dan me-require semua file di inc/.
 *
 * @package ikp-theme
 */

// Pastikan tidak ada output langsung dari file ini.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ============================================================
// Konstanta
// ============================================================
define( 'IKP_THEME_VERSION', '1.0.0' );
define( 'IKP_THEME_PATH', get_template_directory() );
define( 'IKP_THEME_URI', get_template_directory_uri() );

// ============================================================
// Require semua file pendukung di folder inc/
// ============================================================
$ikp_inc_files = array(
	'/inc/theme-setup.php',
	'/inc/enqueue.php',
	'/inc/custom-post-types.php',
	'/inc/acf-fields.php',
	'/inc/helpers.php',
);

foreach ( $ikp_inc_files as $file ) {
	require_once IKP_THEME_PATH . $file;
}
