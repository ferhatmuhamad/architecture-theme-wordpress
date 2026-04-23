<?php
/**
 * IKP Theme — header.php
 *
 * Global header: DOCTYPE, head, dan navigasi utama.
 *
 * @package ikp-theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'font-sans antialiased bg-white text-gray-800' ); ?>>
<?php wp_body_open(); ?>

<!-- ================================================================
     HEADER — sticky, white background, shadow saat scroll
     ================================================================ -->
<header id="ikp-header" class="fixed top-0 left-0 right-0 z-50 bg-white transition-shadow duration-300" role="banner">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="flex items-center justify-between h-16 lg:h-20">

			<!-- Logo -->
			<div class="flex-shrink-0">
				<?php echo ikp_render_logo(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div>

			<!-- Nav Desktop -->
			<?php get_template_part( 'template-parts/header/nav' ); ?>

			<!-- CTA Button Desktop -->
			<div class="hidden lg:flex items-center">
				<a
					href="<?php echo esc_url( ikp_get_field( 'hero_cta_link', get_option( 'page_on_front' ), '#kontak' ) ); ?>"
					class="inline-flex items-center px-5 py-2.5 bg-tertiary hover:bg-green-700 text-white font-semibold text-sm rounded-lg transition-colors duration-200 shadow-sm"
				>
					KONSULTASI SEKARANG
				</a>
			</div>

			<!-- Hamburger Mobile -->
			<button
				id="ikp-hamburger"
				type="button"
				class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-primary hover:bg-gray-100 transition-colors"
				aria-controls="ikp-mobile-menu"
				aria-expanded="false"
				aria-label="<?php esc_attr_e( 'Buka menu', 'ikp-theme' ); ?>"
			>
				<span class="sr-only"><?php esc_html_e( 'Buka menu', 'ikp-theme' ); ?></span>
				<!-- Icon hamburger -->
				<svg id="icon-hamburger" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
				</svg>
				<!-- Icon close -->
				<svg id="icon-close" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>

		</div><!-- /.flex -->
	</div><!-- /.max-w-7xl -->

	<!-- Mobile Menu -->
	<div
		id="ikp-mobile-menu"
		class="hidden lg:hidden border-t border-gray-100 bg-white shadow-lg"
		aria-label="<?php esc_attr_e( 'Menu mobile', 'ikp-theme' ); ?>"
	>
		<div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'mobile-menu-list',
					'container'      => false,
					'fallback_cb'    => 'ikp_fallback_mobile_menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'menu_class'     => 'space-y-1',
					'walker'         => new IKP_Mobile_Menu_Walker(),
				)
			);
			?>
			<div class="pt-2 border-t border-gray-100">
				<a
					href="#kontak"
					class="block w-full text-center px-5 py-3 bg-tertiary hover:bg-green-700 text-white font-semibold text-sm rounded-lg transition-colors"
				>
					KONSULTASI SEKARANG
				</a>
			</div>
		</div>
	</div><!-- /#ikp-mobile-menu -->

</header><!-- /#ikp-header -->

<!-- Spacer agar konten tidak tertimpa header fixed -->
<div class="h-16 lg:h-20" aria-hidden="true"></div>

<?php

/**
 * Fallback menu mobile jika belum ada menu yang diassign.
 */
function ikp_fallback_mobile_menu() {
	$links = array(
		home_url( '/' )       => 'Home',
		home_url( '/layanan' ) => 'Layanan Kami',
		home_url( '/proyek' )  => 'Proyek Kami',
		home_url( '/artikel' ) => 'Artikel',
		home_url( '/profil' )  => 'Profil Perusahaan',
		home_url( '/kontak' )  => 'Kontak Kami',
	);
	echo '<ul class="space-y-1">';
	foreach ( $links as $url => $label ) {
		echo '<li><a href="' . esc_url( $url ) . '" class="block px-3 py-2 text-gray-700 hover:text-primary hover:bg-gray-50 rounded-md font-medium">' . esc_html( $label ) . '</a></li>';
	}
	echo '</ul>';
}

/**
 * Walker kustom untuk nav mobile — menambahkan class Tailwind ke item menu.
 */
if ( ! class_exists( 'IKP_Mobile_Menu_Walker' ) ) {
	class IKP_Mobile_Menu_Walker extends Walker_Nav_Menu {
		public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
			$item    = $data_object;
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$is_active = in_array( 'current-menu-item', $classes, true ) || in_array( 'current_page_item', $classes, true );

			$active_class = $is_active ? 'text-primary bg-blue-50' : 'text-gray-700 hover:text-primary hover:bg-gray-50';

			$output .= '<li>';
			$output .= '<a href="' . esc_url( $item->url ) . '" class="block px-3 py-2 rounded-md font-medium ' . esc_attr( $active_class ) . '">';
			$output .= esc_html( $item->title );
			$output .= '</a>';
		}

		public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
			$output .= '</li>';
		}
	}
}
?>
