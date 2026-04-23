<?php
/**
 * IKP Theme — template-parts/header/nav.php
 *
 * Desktop navigation menu.
 *
 * @package ikp-theme
 */
?>

<nav class="hidden lg:flex items-center space-x-1" role="navigation" aria-label="<?php esc_attr_e( 'Menu utama', 'ikp-theme' ); ?>">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'menu_id'        => 'primary-menu',
			'container'      => false,
			'fallback_cb'    => 'ikp_fallback_primary_nav',
			'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'menu_class'     => 'flex items-center space-x-1',
			'walker'         => new IKP_Nav_Walker(),
		)
	);
	?>
</nav>

<?php

/**
 * Fallback nav desktop jika menu belum diassign.
 */
function ikp_fallback_primary_nav() {
	$links = array(
		home_url( '/' )       => 'Home',
		home_url( '/layanan' ) => 'Layanan Kami',
		home_url( '/proyek' )  => 'Proyek Kami',
		home_url( '/artikel' ) => 'Artikel',
		home_url( '/profil' )  => 'Profil Perusahaan',
		home_url( '/kontak' )  => 'Kontak Kami',
	);
	echo '<ul class="flex items-center space-x-1">';
	foreach ( $links as $url => $label ) {
		echo '<li><a href="' . esc_url( $url ) . '" class="px-3 py-2 text-gray-700 hover:text-primary font-medium text-sm rounded-md hover:bg-gray-50 transition-colors">' . esc_html( $label ) . '</a></li>';
	}
	echo '</ul>';
}

/**
 * Walker kustom untuk nav desktop — styling Tailwind.
 */
if ( ! class_exists( 'IKP_Nav_Walker' ) ) {
	class IKP_Nav_Walker extends Walker_Nav_Menu {
		public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
			$item    = $data_object;
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$is_active = in_array( 'current-menu-item', $classes, true ) || in_array( 'current_page_item', $classes, true );

			$link_class = $is_active
				? 'px-3 py-2 text-primary font-semibold text-sm rounded-md bg-blue-50'
				: 'px-3 py-2 text-gray-700 hover:text-primary font-medium text-sm rounded-md hover:bg-gray-50 transition-colors';

			$output .= '<li class="relative">';
			$output .= '<a href="' . esc_url( $item->url ) . '" class="' . esc_attr( $link_class ) . '">';
			$output .= esc_html( $item->title );
			$output .= '</a>';
		}

		public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
			$output .= '</li>';
		}
	}
}
?>
