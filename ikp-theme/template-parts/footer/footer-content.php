<?php
/**
 * IKP Theme — template-parts/footer/footer-content.php
 *
 * Konten footer: info kontak, nav footer, copyright.
 *
 * @package ikp-theme
 */
?>

<footer class="bg-gray-900 text-white" role="contentinfo">

	<!-- Footer Main -->
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">

			<!-- Kolom 1: Logo + Deskripsi -->
			<div class="lg:col-span-2">
				<!-- Logo atau teks nama perusahaan -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center gap-3 mb-4">
					<?php if ( has_custom_logo() ) : ?>
						<div class="brightness-0 invert"><?php the_custom_logo(); ?></div>
					<?php else : ?>
						<div class="flex items-center gap-2">
							<div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
								<span class="text-white font-bold text-lg">IKP</span>
							</div>
							<div>
								<div class="font-bold text-white text-sm leading-tight">CV. ISTIMEWA</div>
								<div class="font-bold text-white text-sm leading-tight">KARYA PRESISI</div>
							</div>
						</div>
					<?php endif; ?>
				</a>
				<p class="text-gray-400 text-sm leading-relaxed mb-4">
					<?php esc_html_e( 'General Supplier, Architecture and Kontraktor dengan pengalaman 15 tahun di Yogyakarta. Kami siap mewujudkan impian bangunan Anda dengan kualitas terbaik.', 'ikp-theme' ); ?>
				</p>
				<!-- Social Media -->
				<div class="flex items-center gap-3">
					<a href="#" class="w-9 h-9 bg-gray-700 hover:bg-primary rounded-lg flex items-center justify-center transition-colors" aria-label="Facebook">
						<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
					</a>
					<a href="#" class="w-9 h-9 bg-gray-700 hover:bg-primary rounded-lg flex items-center justify-center transition-colors" aria-label="Instagram">
						<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor" stroke-width="2"/><path fill="none" stroke="currentColor" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line fill="none" stroke="currentColor" stroke-width="2" x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
					</a>
					<a href="https://wa.me/6282225672526" class="w-9 h-9 bg-gray-700 hover:bg-green-600 rounded-lg flex items-center justify-center transition-colors" aria-label="WhatsApp">
						<svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
					</a>
				</div>
			</div>

			<!-- Kolom 2: Layanan -->
			<div>
				<h3 class="text-white font-semibold text-base mb-4"><?php esc_html_e( 'Layanan Kami', 'ikp-theme' ); ?></h3>
				<ul class="space-y-2">
					<?php
					$layanan_links = array(
						'Renovasi Rumah & Kantor',
						'Pembangunan Ruko & Rumah',
						'Bangunan Komersial',
						'Penyediaan Bahan Bangunan',
						'Konsultasi Arsitektur',
					);
					foreach ( $layanan_links as $link ) :
						?>
						<li>
							<a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>" class="text-gray-400 hover:text-white text-sm transition-colors flex items-center gap-1">
								<span class="text-tertiary">›</span>
								<?php echo esc_html( $link ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<!-- Kolom 3: Kontak -->
			<div>
				<h3 class="text-white font-semibold text-base mb-4"><?php esc_html_e( 'Hubungi Kami', 'ikp-theme' ); ?></h3>
				<address class="not-italic space-y-3">
					<div class="flex gap-3">
						<svg class="w-5 h-5 text-tertiary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
						</svg>
						<p class="text-gray-400 text-sm leading-relaxed">
							Padukuhan Surah, Bimomartani,<br>
							Ngemplak, Sleman,<br>
							Yogyakarta 55584
						</p>
					</div>
					<div class="flex gap-3 items-start">
						<svg class="w-5 h-5 text-tertiary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
						</svg>
						<a href="tel:+6282225672526" class="text-gray-400 hover:text-white text-sm transition-colors">
							+62 822-2567-2526
						</a>
					</div>
					<div class="flex gap-3 items-start">
						<svg class="w-5 h-5 text-tertiary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
						</svg>
						<a href="mailto:istimewakaryapresisi@gmail.com" class="text-gray-400 hover:text-white text-sm transition-colors break-all">
							istimewakaryapresisi@gmail.com
						</a>
					</div>
				</address>
			</div>

		</div>
	</div><!-- /.max-w-7xl -->

	<!-- Footer Bottom: Copyright -->
	<div class="border-t border-gray-800">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col sm:flex-row items-center justify-between gap-2">
			<p class="text-gray-500 text-sm">
				Copyright &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> IKP — Powered by CV. Istimewa Karya Presisi
			</p>
			<p class="text-gray-600 text-xs">
				<?php
				printf(
					/* translators: %s: WordPress */
					esc_html__( 'Built with %s', 'ikp-theme' ),
					'<a href="https://wordpress.org" class="hover:text-gray-400 transition-colors" target="_blank" rel="noopener noreferrer">WordPress</a>'
				);
				?>
			</p>
		</div>
	</div>

</footer>
