<?php
/**
 * IKP Theme — Section: Layanan Kami
 *
 * Auto-fetch dari CPT 'layanan', fallback ke 3 layanan default.
 *
 * @package ikp-theme
 */

// Query CPT layanan.
$layanan_query = new WP_Query(
	array(
		'post_type'      => 'layanan',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
		'no_found_rows'  => true,
	)
);

// Data fallback jika belum ada post layanan.
$fallback_layanan = array(
	array(
		'title' => 'Renovasi Rumah & Kantor',
		'desc'  => 'Kami mengerjakan renovasi rumah tinggal dan kantor dengan hasil berkualitas, tepat waktu, dan sesuai anggaran yang telah disepakati.',
		'icon'  => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
		'image' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&q=80&auto=format&fit=crop',
		'color' => 'text-primary',
	),
	array(
		'title' => 'Pembangunan Ruko, Rumah & Bangunan Lainnya',
		'desc'  => 'Membangun hunian impian, ruko, dan bangunan komersial dari pondasi hingga selesai dengan material pilihan dan pengerjaan profesional.',
		'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
		'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&q=80&auto=format&fit=crop',
		'color' => 'text-secondary',
	),
	array(
		'title' => 'Penyedia Bahan Bangunan Berkualitas',
		'desc'  => 'Kami menyediakan berbagai bahan bangunan berkualitas tinggi dengan harga kompetitif, dari material dasar hingga finishing premium.',
		'icon'  => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
		'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600&q=80&auto=format&fit=crop',
		'color' => 'text-tertiary',
	),
);
?>

<!-- ============================================================
     Section 2: Layanan Kami
     ============================================================ -->
<section id="layanan" class="py-16 lg:py-24 bg-white">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

		<!-- Section Header -->
		<div class="text-center mb-12">
			<span class="inline-block text-primary font-semibold text-sm uppercase tracking-widest mb-3">
				Memberikan yang Terbaik
			</span>
			<h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Layanan Kami</h2>
			<p class="text-gray-500 max-w-2xl mx-auto">
				Kami menyediakan layanan konstruksi dan renovasi lengkap dengan standar kualitas tinggi untuk memastikan kepuasan Anda.
			</p>
		</div>

		<!-- Cards Layanan -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php if ( $layanan_query->have_posts() ) : ?>

				<?php
				$color_classes = array( 'text-primary', 'text-secondary', 'text-tertiary' );
				$idx = 0;
				while ( $layanan_query->have_posts() ) :
					$layanan_query->the_post();
					$color = $color_classes[ $idx % 3 ];
					$idx++;
					?>
					<article class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden group border border-gray-100">
						<!-- Gambar -->
						<div class="relative h-52 overflow-hidden">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'ikp-card', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500' ) ); ?>
							<?php else : ?>
								<div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
									<svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/></svg>
								</div>
							<?php endif; ?>
						</div>
						<!-- Konten -->
						<div class="p-6">
							<h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
							<p class="text-gray-500 text-sm leading-relaxed line-clamp-3">
								<?php echo ikp_get_excerpt( get_the_ID(), 120 ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</p>
							<a href="<?php the_permalink(); ?>" class="inline-flex items-center mt-4 text-sm font-semibold <?php echo esc_attr( $color ); ?> hover:underline">
								Selengkapnya
								<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
							</a>
						</div>
					</article>
					<?php
				endwhile;
				wp_reset_postdata();

			else :

				// ── Fallback: data hardcoded ──────────────────────────────
				foreach ( $fallback_layanan as $idx => $item ) :
					?>
					<div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden group border border-gray-100">
						<!-- Gambar fallback Unsplash -->
						<div class="relative h-52 overflow-hidden">
							<img
								src="<?php echo esc_url( $item['image'] ); ?>"
								alt="<?php echo esc_attr( $item['title'] ); ?>"
								class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
								loading="lazy"
							>
						</div>
						<!-- Konten -->
						<div class="p-6">
							<div class="w-10 h-10 rounded-xl bg-gray-50 flex items-center justify-center mb-3">
								<svg class="w-5 h-5 <?php echo esc_attr( $item['color'] ); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo esc_attr( $item['icon'] ); ?>"/>
								</svg>
							</div>
							<h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors">
								<?php echo esc_html( $item['title'] ); ?>
							</h3>
							<p class="text-gray-500 text-sm leading-relaxed">
								<?php echo esc_html( $item['desc'] ); ?>
							</p>
							<a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>" class="inline-flex items-center mt-4 text-sm font-semibold <?php echo esc_attr( $item['color'] ); ?> hover:underline">
								Selengkapnya
								<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
							</a>
						</div>
					</div>
					<?php
				endforeach;

			endif;
			?>
		</div>

		<!-- CTA lihat semua layanan -->
		<div class="text-center mt-12">
			<a
				href="<?php echo esc_url( home_url( '/layanan' ) ); ?>"
				class="inline-flex items-center px-8 py-3.5 border-2 border-primary text-primary hover:bg-primary hover:text-white font-semibold rounded-xl transition-all duration-200"
			>
				Lihat Semua Layanan
				<svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
			</a>
		</div>

	</div>
</section>
