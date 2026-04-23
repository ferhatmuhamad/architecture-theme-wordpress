<?php
/**
 * IKP Theme — front-page.php
 *
 * Template Homepage. Memuat semua section via template-parts.
 *
 * @package ikp-theme
 */

get_header();
?>

<main id="main" class="site-main" role="main">

	<!-- Section 1: Hero -->
	<?php get_template_part( 'template-parts/sections/hero' ); ?>

	<!-- Section 2: Layanan Kami -->
	<?php get_template_part( 'template-parts/sections/layanan' ); ?>

	<!-- Section 3: Tentang Singkat -->
	<?php get_template_part( 'template-parts/sections/tentang-singkat' ); ?>

	<!-- Section 4: Keunggulan Kami -->
	<?php get_template_part( 'template-parts/sections/keunggulan' ); ?>

	<!-- Section 5: Proyek Terbaru -->
	<?php get_template_part( 'template-parts/sections/proyek-terbaru' ); ?>

	<!-- Section 6: Artikel Terbaru -->
	<?php get_template_part( 'template-parts/sections/artikel-terbaru' ); ?>

	<!-- Section 7: CTA + Info Kontak -->
	<?php get_template_part( 'template-parts/sections/cta-kontak' ); ?>

</main>

<?php get_footer(); ?>
