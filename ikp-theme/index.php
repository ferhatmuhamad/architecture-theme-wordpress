<?php
/**
 * IKP Theme — index.php
 *
 * Fallback template. Digunakan bila tidak ada template yang lebih spesifik.
 *
 * @package ikp-theme
 */

get_header();
?>

<main id="main" class="site-main py-16" role="main">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

		<?php if ( have_posts() ) : ?>

			<div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition-shadow' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'ikp-card', array( 'class' => 'w-full h-48 object-cover' ) ); ?>
							</a>
						<?php endif; ?>
						<div class="p-6">
							<h2 class="text-lg font-semibold text-gray-900 mb-2">
								<a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors">
									<?php the_title(); ?>
								</a>
							</h2>
							<div class="text-gray-600 text-sm line-clamp-3">
								<?php the_excerpt(); ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-primary font-medium text-sm hover:underline">
								<?php esc_html_e( 'Baca selengkapnya →', 'ikp-theme' ); ?>
							</a>
						</div>
					</article>
					<?php
				endwhile;
				?>
			</div>

			<!-- Pagination -->
			<div class="mt-12">
				<?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
			</div>

		<?php else : ?>

			<div class="text-center py-20">
				<h1 class="text-2xl font-semibold text-gray-700 mb-4">
					<?php esc_html_e( 'Konten tidak ditemukan.', 'ikp-theme' ); ?>
				</h1>
				<p class="text-gray-500">
					<?php esc_html_e( 'Belum ada konten yang tersedia saat ini.', 'ikp-theme' ); ?>
				</p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block mt-6 px-6 py-3 bg-primary text-white rounded-lg hover:bg-blue-700 transition-colors">
					<?php esc_html_e( 'Kembali ke Beranda', 'ikp-theme' ); ?>
				</a>
			</div>

		<?php endif; ?>

	</div>
</main>

<?php get_footer(); ?>
