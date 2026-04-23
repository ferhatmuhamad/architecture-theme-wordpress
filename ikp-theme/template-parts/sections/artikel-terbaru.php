<?php
/**
 * IKP Theme — Section: Artikel Terbaru
 *
 * Auto-fetch 3 post terbaru dari CPT 'artikel', dengan fallback placeholder.
 *
 * @package ikp-theme
 */

// Query artikel terbaru.
$artikel_query = new WP_Query(
	array(
		'post_type'      => 'artikel',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'DESC',
		'no_found_rows'  => true,
	)
);

// Data placeholder jika belum ada artikel.
$placeholder_artikel = array(
	array(
		'title'    => 'Tips Memilih Material Bangunan Berkualitas untuk Rumah Tahan Lama',
		'excerpt'  => 'Memilih material bangunan yang tepat adalah kunci rumah yang tahan lama dan hemat biaya perawatan. Pelajari tips dari ahlinya.',
		'kategori' => 'Tips Konstruksi',
		'date'     => '15 Maret 2024',
		'image'    => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&q=80&auto=format&fit=crop',
	),
	array(
		'title'    => 'Panduan Lengkap Renovasi Rumah: Dari Perencanaan hingga Finishing',
		'excerpt'  => 'Renovasi rumah bisa menjadi pengalaman yang menyenangkan jika direncanakan dengan matang. Simak panduan lengkap berikut ini.',
		'kategori' => 'Panduan Renovasi',
		'date'     => '8 Maret 2024',
		'image'    => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&q=80&auto=format&fit=crop',
	),
	array(
		'title'    => 'Tren Desain Arsitektur Rumah Modern di Yogyakarta 2024',
		'excerpt'  => 'Desain arsitektur modern terus berkembang. Intip tren terbaru yang sedang populer di Yogyakarta dan cocok untuk iklim tropis.',
		'kategori' => 'Inspirasi Desain',
		'date'     => '1 Maret 2024',
		'image'    => 'https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=600&q=80&auto=format&fit=crop',
	),
);
?>

<!-- ============================================================
     Section 6: Artikel Terbaru
     ============================================================ -->
<section id="artikel" class="py-16 lg:py-24 bg-gray-50">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

		<!-- Section Header -->
		<div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mb-12 gap-4">
			<div>
				<span class="inline-block text-primary font-semibold text-sm uppercase tracking-widest mb-3">
					Tips & Inspirasi
				</span>
				<h2 class="text-3xl lg:text-4xl font-bold text-gray-900">Artikel Terbaru Seputar Konstruksi</h2>
			</div>
			<a
				href="<?php echo esc_url( get_post_type_archive_link( 'artikel' ) ?: home_url( '/artikel' ) ); ?>"
				class="flex-shrink-0 inline-flex items-center text-primary font-semibold text-sm hover:underline"
			>
				Lihat Semua Artikel
				<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
			</a>
		</div>

		<!-- Grid Artikel -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php if ( $artikel_query->have_posts() ) : ?>

				<?php
				while ( $artikel_query->have_posts() ) :
					$artikel_query->the_post();
					// Coba ambil kategori post atau kategori default.
					$cats = get_the_terms( get_the_ID(), 'category' );
					$kategori = ( $cats && ! is_wp_error( $cats ) ) ? $cats[0]->name : 'Artikel';
					?>
					<article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 group flex flex-col">
						<!-- Gambar -->
						<div class="relative h-48 overflow-hidden flex-shrink-0">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'ikp-card', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500' ) ); ?>
							<?php else : ?>
								<div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
									<svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
								</div>
							<?php endif; ?>
							<!-- Kategori badge -->
							<div class="absolute top-3 left-3">
								<span class="bg-white text-primary text-xs font-semibold px-2.5 py-1 rounded-full shadow-sm">
									<?php echo esc_html( $kategori ); ?>
								</span>
							</div>
						</div>
						<!-- Konten -->
						<div class="p-6 flex flex-col flex-1">
							<div class="text-xs text-gray-400 mb-2">
								<?php echo esc_html( get_the_date() ); ?>
							</div>
							<h3 class="font-bold text-gray-900 text-base mb-3 line-clamp-2 group-hover:text-primary transition-colors flex-1">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
							<p class="text-gray-500 text-sm leading-relaxed line-clamp-3 mb-4">
								<?php echo ikp_get_excerpt( get_the_ID(), 120 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</p>
							<a href="<?php the_permalink(); ?>" class="inline-flex items-center text-sm font-semibold text-primary hover:underline mt-auto">
								Baca Selengkapnya
								<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
							</a>
						</div>
					</article>
					<?php
				endwhile;
				wp_reset_postdata();

			else :

				// ── Fallback placeholder ──────────────────────────────────
				foreach ( $placeholder_artikel as $item ) :
					?>
					<div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 group flex flex-col">
						<!-- Gambar fallback -->
						<div class="relative h-48 overflow-hidden flex-shrink-0">
							<img
								src="<?php echo esc_url( $item['image'] ); ?>"
								alt="<?php echo esc_attr( $item['title'] ); ?>"
								class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
								loading="lazy"
							>
							<!-- Kategori badge -->
							<div class="absolute top-3 left-3">
								<span class="bg-white text-primary text-xs font-semibold px-2.5 py-1 rounded-full shadow-sm">
									<?php echo esc_html( $item['kategori'] ); ?>
								</span>
							</div>
						</div>
						<!-- Konten -->
						<div class="p-6 flex flex-col flex-1">
							<div class="text-xs text-gray-400 mb-2">
								<?php echo esc_html( $item['date'] ); ?>
							</div>
							<h3 class="font-bold text-gray-900 text-base mb-3 line-clamp-2 group-hover:text-primary transition-colors flex-1">
								<?php echo esc_html( $item['title'] ); ?>
							</h3>
							<p class="text-gray-500 text-sm leading-relaxed line-clamp-3 mb-4">
								<?php echo esc_html( $item['excerpt'] ); ?>
							</p>
							<a href="<?php echo esc_url( home_url( '/artikel' ) ); ?>" class="inline-flex items-center text-sm font-semibold text-primary hover:underline mt-auto">
								Baca Selengkapnya
								<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
							</a>
						</div>
					</div>
					<?php
				endforeach;

			endif;
			?>
		</div>

		<!-- CTA -->
		<div class="text-center mt-10">
			<a
				href="<?php echo esc_url( get_post_type_archive_link( 'artikel' ) ?: home_url( '/artikel' ) ); ?>"
				class="inline-flex items-center px-8 py-3.5 border-2 border-primary text-primary hover:bg-primary hover:text-white font-semibold rounded-xl transition-all duration-200"
			>
				Lihat Semua Artikel
				<svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
			</a>
		</div>

	</div>
</section>
