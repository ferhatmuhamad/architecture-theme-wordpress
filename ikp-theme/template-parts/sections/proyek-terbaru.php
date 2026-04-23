<?php
/**
 * IKP Theme — Section: Proyek Terbaru
 *
 * Auto-fetch 3-4 post terbaru dari CPT 'proyek', dengan fallback placeholder.
 *
 * @package ikp-theme
 */

// Query proyek terbaru.
$proyek_query = new WP_Query(
	array(
		'post_type'      => 'proyek',
		'posts_per_page' => 4,
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'DESC',
		'no_found_rows'  => true,
	)
);

// Data placeholder jika belum ada proyek.
$placeholder_proyek = array(
	array(
		'title'     => 'Renovasi Rumah 2 Lantai — Sleman',
		'lokasi'    => 'Sleman, Yogyakarta',
		'tahun'     => '2023',
		'kategori'  => 'Renovasi',
		'image'     => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80&auto=format&fit=crop',
	),
	array(
		'title'     => 'Pembangunan Ruko Komersial — Bantul',
		'lokasi'    => 'Bantul, Yogyakarta',
		'tahun'     => '2023',
		'kategori'  => 'Non-Estate',
		'image'     => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=600&q=80&auto=format&fit=crop',
	),
	array(
		'title'     => 'Perumahan Cluster Modern — Ngemplak',
		'lokasi'    => 'Ngemplak, Sleman',
		'tahun'     => '2022',
		'kategori'  => 'Perumahan',
		'image'     => 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?w=600&q=80&auto=format&fit=crop',
	),
	array(
		'title'     => 'Gedung Kantor 3 Lantai — Kota Yogyakarta',
		'lokasi'    => 'Kota Yogyakarta',
		'tahun'     => '2022',
		'kategori'  => 'Non-Estate',
		'image'     => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80&auto=format&fit=crop',
	),
);
?>

<!-- ============================================================
     Section 5: Proyek Terbaru
     ============================================================ -->
<section id="proyek" class="py-16 lg:py-24 bg-white">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

		<!-- Section Header -->
		<div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mb-12 gap-4">
			<div>
				<span class="inline-block text-primary font-semibold text-sm uppercase tracking-widest mb-3">
					Portfolio Kami
				</span>
				<h2 class="text-3xl lg:text-4xl font-bold text-gray-900">Proyek Terbaru Kami</h2>
			</div>
			<a
				href="<?php echo esc_url( get_post_type_archive_link( 'proyek' ) ?: home_url( '/proyek' ) ); ?>"
				class="flex-shrink-0 inline-flex items-center text-primary font-semibold text-sm hover:underline"
			>
				Lihat Semua Proyek
				<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
			</a>
		</div>

		<!-- Grid Proyek -->
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
			<?php if ( $proyek_query->have_posts() ) : ?>

				<?php
				while ( $proyek_query->have_posts() ) :
					$proyek_query->the_post();
					$lokasi   = ikp_get_field( 'proyek_lokasi', get_the_ID(), '' );
					$tahun    = ikp_get_field( 'proyek_tahun', get_the_ID(), '' );
					$kategori = ikp_get_field( 'proyek_kategori', get_the_ID(), '' );
					?>
					<article class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
						<!-- Gambar -->
						<div class="relative h-56 overflow-hidden">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'ikp-card', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500' ) ); ?>
							<?php else : ?>
								<div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
									<svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
								</div>
							<?php endif; ?>
							<!-- Kategori badge -->
							<?php if ( $kategori ) : ?>
								<div class="absolute top-3 left-3">
									<span class="bg-primary text-white text-xs font-semibold px-2.5 py-1 rounded-full">
										<?php echo esc_html( ucfirst( $kategori ) ); ?>
									</span>
								</div>
							<?php endif; ?>
						</div>
						<!-- Konten -->
						<div class="p-5">
							<h3 class="font-bold text-gray-900 text-sm mb-2 line-clamp-2 group-hover:text-primary transition-colors">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
							<div class="flex items-center gap-3 text-xs text-gray-500">
								<?php if ( $lokasi ) : ?>
									<span class="flex items-center gap-1">
										<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
										<?php echo esc_html( $lokasi ); ?>
									</span>
								<?php endif; ?>
								<?php if ( $tahun ) : ?>
									<span class="flex items-center gap-1">
										<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
										<?php echo esc_html( $tahun ); ?>
									</span>
								<?php endif; ?>
							</div>
						</div>
					</article>
					<?php
				endwhile;
				wp_reset_postdata();

			else :

				// ── Fallback placeholder ──────────────────────────────────
				foreach ( $placeholder_proyek as $item ) :
					?>
					<div class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
						<!-- Gambar placeholder -->
						<div class="relative h-56 overflow-hidden">
							<img
								src="<?php echo esc_url( $item['image'] ); ?>"
								alt="<?php echo esc_attr( $item['title'] ); ?>"
								class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
								loading="lazy"
							>
							<!-- Kategori badge -->
							<div class="absolute top-3 left-3">
								<span class="bg-primary text-white text-xs font-semibold px-2.5 py-1 rounded-full">
									<?php echo esc_html( $item['kategori'] ); ?>
								</span>
							</div>
						</div>
						<!-- Konten -->
						<div class="p-5">
							<h3 class="font-bold text-gray-900 text-sm mb-2 line-clamp-2 group-hover:text-primary transition-colors">
								<?php echo esc_html( $item['title'] ); ?>
							</h3>
							<div class="flex items-center gap-3 text-xs text-gray-500">
								<span class="flex items-center gap-1">
									<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
									<?php echo esc_html( $item['lokasi'] ); ?>
								</span>
								<span class="flex items-center gap-1">
									<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
									<?php echo esc_html( $item['tahun'] ); ?>
								</span>
							</div>
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
				href="<?php echo esc_url( get_post_type_archive_link( 'proyek' ) ?: home_url( '/proyek' ) ); ?>"
				class="inline-flex items-center px-8 py-3.5 bg-primary hover:bg-blue-700 text-white font-semibold rounded-xl transition-colors shadow-sm"
			>
				Lihat Semua Proyek
				<svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
			</a>
		</div>

	</div>
</section>
