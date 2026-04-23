<?php
/**
 * IKP Theme — Section: CTA + Info Kontak
 *
 * Background image dengan overlay, headline ajakan, info kontak + form kontak sederhana.
 *
 * @package ikp-theme
 */
?>

<!-- ============================================================
     Section 7: CTA + Info Kontak
     ============================================================ -->
<section
	id="kontak"
	class="relative py-16 lg:py-24 bg-gray-900 bg-cover bg-center"
	style="background-image: url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1920&q=80&auto=format&fit=crop');"
	aria-labelledby="cta-heading"
>
	<!-- Overlay -->
	<div class="absolute inset-0 bg-gray-900/80" aria-hidden="true"></div>

	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

		<!-- Headline -->
		<div class="text-center mb-12">
			<span class="inline-block bg-yellow-400 text-yellow-900 text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wide mb-4">
				Mulai Sekarang
			</span>
			<h2 id="cta-heading" class="text-3xl lg:text-4xl font-bold text-white mb-4">
				Siap Memulai Proyek Anda? <br class="hidden sm:block">Hubungi Kami Sekarang
			</h2>
			<p class="text-gray-300 max-w-2xl mx-auto">
				Tim kami siap memberikan konsultasi gratis dan survei lokasi tanpa biaya. Hubungi kami hari ini dan wujudkan bangunan impian Anda bersama CV. Istimewa Karya Presisi.
			</p>
		</div>

		<!-- Grid: Info Kontak + Form -->
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">

			<!-- Kolom Kiri: Info Kontak -->
			<div class="text-white space-y-6">
				<h3 class="text-xl font-bold mb-6"><?php esc_html_e( 'Informasi Kontak', 'ikp-theme' ); ?></h3>

				<!-- Alamat -->
				<div class="flex gap-4">
					<div class="flex-shrink-0 w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center">
						<svg class="w-5 h-5 text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
						</svg>
					</div>
					<div>
						<p class="font-semibold text-sm text-gray-300 mb-1"><?php esc_html_e( 'Alamat Kantor', 'ikp-theme' ); ?></p>
						<address class="not-italic text-white text-sm leading-relaxed">
							Padukuhan Surah, Bimomartani,<br>
							Ngemplak, Sleman,<br>
							Yogyakarta 55584
						</address>
					</div>
				</div>

				<!-- Telepon / WhatsApp -->
				<div class="flex gap-4">
					<div class="flex-shrink-0 w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center">
						<svg class="w-5 h-5 text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
						</svg>
					</div>
					<div>
						<p class="font-semibold text-sm text-gray-300 mb-1"><?php esc_html_e( 'Telepon / WhatsApp', 'ikp-theme' ); ?></p>
						<a href="tel:+6282225672526" class="text-white text-sm hover:text-tertiary transition-colors">+62 822-2567-2526</a>
						<div class="mt-2">
							<a
								href="https://wa.me/6282225672526?text=Halo%20IKP%2C%20saya%20ingin%20konsultasi%20mengenai%20proyek%20bangunan."
								target="_blank"
								rel="noopener noreferrer"
								class="inline-flex items-center gap-2 px-4 py-2 bg-green-500 hover:bg-green-600 text-white text-xs font-semibold rounded-lg transition-colors"
							>
								<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
								Chat WhatsApp
							</a>
						</div>
					</div>
				</div>

				<!-- Email -->
				<div class="flex gap-4">
					<div class="flex-shrink-0 w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center">
						<svg class="w-5 h-5 text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
						</svg>
					</div>
					<div>
						<p class="font-semibold text-sm text-gray-300 mb-1"><?php esc_html_e( 'Email', 'ikp-theme' ); ?></p>
						<a href="mailto:istimewakaryapresisi@gmail.com" class="text-white text-sm hover:text-tertiary transition-colors break-all">
							istimewakaryapresisi@gmail.com
						</a>
					</div>
				</div>

				<!-- Jam Operasional -->
				<div class="flex gap-4">
					<div class="flex-shrink-0 w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center">
						<svg class="w-5 h-5 text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
						</svg>
					</div>
					<div>
						<p class="font-semibold text-sm text-gray-300 mb-1"><?php esc_html_e( 'Jam Operasional', 'ikp-theme' ); ?></p>
						<p class="text-white text-sm">Senin – Jumat: 08.00 – 17.00 WIB</p>
						<p class="text-white text-sm">Sabtu: 08.00 – 14.00 WIB</p>
					</div>
				</div>

			</div><!-- /.kolom kiri -->

			<!-- Kolom Kanan: Form Kontak Sederhana -->
			<div class="bg-white rounded-2xl p-6 lg:p-8 shadow-xl">
				<h3 class="text-xl font-bold text-gray-900 mb-6"><?php esc_html_e( 'Kirim Pesan', 'ikp-theme' ); ?></h3>

				<?php
				// Coba render shortcode Contact Form 7 jika tersedia.
				if ( function_exists( 'wpcf7_contact_form' ) || shortcode_exists( 'contact-form-7' ) ) :
					echo do_shortcode( '[contact-form-7 id="contact-form-1" title="Kontak Kami"]' );
				else :
					// Fallback: form HTML sederhana.
					?>
					<form
						action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"
						method="post"
						class="space-y-4"
						novalidate
					>
						<input type="hidden" name="action" value="ikp_contact_form">
						<?php wp_nonce_field( 'ikp_contact_nonce', 'ikp_nonce' ); ?>

						<!-- Nama -->
						<div>
							<label for="contact-name" class="block text-sm font-medium text-gray-700 mb-1">
								<?php esc_html_e( 'Nama Lengkap', 'ikp-theme' ); ?> <span class="text-secondary">*</span>
							</label>
							<input
								type="text"
								id="contact-name"
								name="contact_name"
								class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-colors"
								placeholder="Masukkan nama Anda"
								required
							>
						</div>

						<!-- No HP / WA -->
						<div>
							<label for="contact-phone" class="block text-sm font-medium text-gray-700 mb-1">
								<?php esc_html_e( 'No. HP / WhatsApp', 'ikp-theme' ); ?> <span class="text-secondary">*</span>
							</label>
							<input
								type="tel"
								id="contact-phone"
								name="contact_phone"
								class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-colors"
								placeholder="Contoh: 0822-xxxx-xxxx"
								required
							>
						</div>

						<!-- Email -->
						<div>
							<label for="contact-email" class="block text-sm font-medium text-gray-700 mb-1">
								<?php esc_html_e( 'Email', 'ikp-theme' ); ?>
							</label>
							<input
								type="email"
								id="contact-email"
								name="contact_email"
								class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-colors"
								placeholder="email@contoh.com"
							>
						</div>

						<!-- Jenis Layanan -->
						<div>
							<label for="contact-layanan" class="block text-sm font-medium text-gray-700 mb-1">
								<?php esc_html_e( 'Jenis Layanan', 'ikp-theme' ); ?>
							</label>
							<select
								id="contact-layanan"
								name="contact_layanan"
								class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-colors bg-white"
							>
								<option value=""><?php esc_html_e( '— Pilih layanan —', 'ikp-theme' ); ?></option>
								<option value="renovasi"><?php esc_html_e( 'Renovasi Rumah / Kantor', 'ikp-theme' ); ?></option>
								<option value="pembangunan"><?php esc_html_e( 'Pembangunan Baru', 'ikp-theme' ); ?></option>
								<option value="bahan"><?php esc_html_e( 'Penyediaan Bahan Bangunan', 'ikp-theme' ); ?></option>
								<option value="konsultasi"><?php esc_html_e( 'Konsultasi Arsitektur', 'ikp-theme' ); ?></option>
								<option value="lainnya"><?php esc_html_e( 'Lainnya', 'ikp-theme' ); ?></option>
							</select>
						</div>

						<!-- Pesan -->
						<div>
							<label for="contact-message" class="block text-sm font-medium text-gray-700 mb-1">
								<?php esc_html_e( 'Pesan / Deskripsi Proyek', 'ikp-theme' ); ?> <span class="text-secondary">*</span>
							</label>
							<textarea
								id="contact-message"
								name="contact_message"
								rows="4"
								class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-colors resize-none"
								placeholder="Ceritakan kebutuhan proyek Anda..."
								required
							></textarea>
						</div>

						<!-- Submit -->
						<button
							type="submit"
							class="w-full px-6 py-3.5 bg-tertiary hover:bg-green-700 text-white font-bold rounded-xl transition-colors shadow-sm text-sm"
						>
							<?php esc_html_e( 'Kirim Pesan Sekarang', 'ikp-theme' ); ?>
						</button>

						<p class="text-xs text-gray-400 text-center">
							<?php esc_html_e( 'Atau langsung hubungi kami via WhatsApp untuk respons lebih cepat.', 'ikp-theme' ); ?>
						</p>
					</form>
					<?php
				endif;
				?>
			</div><!-- /.form -->

		</div><!-- /.grid -->

	</div><!-- /.max-w-7xl -->
</section>
