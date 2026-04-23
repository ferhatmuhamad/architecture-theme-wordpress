<?php
/**
 * IKP Theme — Section: Tentang Singkat
 *
 * 2 kolom: gambar kiri, teks kanan.
 *
 * @package ikp-theme
 */

$tentang_eyebrow = ikp_get_field( 'tentang_eyebrow', get_the_ID(), 'Tentang Kami' );
$tentang_title   = ikp_get_field( 'tentang_title', get_the_ID(), 'Kami Siap Mewujudkan Impian Anda' );
$tentang_text    = ikp_get_field(
	'tentang_text',
	get_the_ID(),
	'CV. Istimewa Karya Presisi adalah perusahaan General Supplier, Architecture & Kontraktor yang berpusat di Yogyakarta. Dengan pengalaman lebih dari 15 tahun, kami telah menyelesaikan ratusan proyek mulai dari renovasi rumah tinggal, pembangunan ruko, hingga proyek komersial skala besar.

Kami berkomitmen menghadirkan kualitas terbaik dalam setiap pekerjaan, didukung oleh tim profesional berpengalaman yang memahami kebutuhan klien secara mendalam. Kepercayaan Anda adalah prioritas utama kami.'
);
$tentang_image   = ikp_get_field( 'tentang_image', get_the_ID(), false );

$fallback_image = 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=80&auto=format&fit=crop';

$poin_unggulan = array(
	'Berpengalaman lebih dari 15 tahun di industri konstruksi',
	'Tim profesional bersertifikat & berlisensi resmi',
	'Lebih dari 200 proyek berhasil diselesaikan',
	'Garansi pekerjaan dengan SLA jelas',
);
?>

<!-- ============================================================
     Section 3: Tentang Singkat
     ============================================================ -->
<section id="tentang" class="py-16 lg:py-24 bg-white overflow-hidden">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

			<!-- Kolom Kiri: Gambar -->
			<div class="relative">
				<div class="relative rounded-2xl overflow-hidden shadow-xl aspect-[4/3]">
					<?php if ( ! empty( $tentang_image ) && is_array( $tentang_image ) ) : ?>
						<img
							src="<?php echo esc_url( $tentang_image['url'] ); ?>"
							alt="<?php echo esc_attr( $tentang_image['alt'] ?? esc_html__( 'Tentang IKP', 'ikp-theme' ) ); ?>"
							class="w-full h-full object-cover"
							loading="lazy"
						>
					<?php else : ?>
						<img
							src="<?php echo esc_url( $fallback_image ); ?>"
							alt="<?php esc_attr_e( 'Tim IKP — CV. Istimewa Karya Presisi', 'ikp-theme' ); ?>"
							class="w-full h-full object-cover"
							loading="lazy"
						>
					<?php endif; ?>
				</div>

				<!-- Badge pengalaman -->
				<div class="absolute -bottom-4 -right-4 lg:bottom-6 lg:right-6 bg-primary text-white rounded-2xl p-4 shadow-xl text-center min-w-[100px]">
					<div class="text-3xl font-bold leading-none">15+</div>
					<div class="text-xs font-medium mt-1 leading-tight">Tahun<br>Pengalaman</div>
				</div>
			</div>

			<!-- Kolom Kanan: Teks -->
			<div>
				<!-- Eyebrow -->
				<span class="inline-block text-secondary font-semibold text-sm uppercase tracking-widest mb-4">
					<?php echo esc_html( $tentang_eyebrow ); ?>
				</span>

				<!-- Judul -->
				<h2 class="text-3xl lg:text-4xl font-bold text-gray-900 leading-tight mb-6">
					<?php echo esc_html( $tentang_title ); ?>
				</h2>

				<!-- Teks deskripsi -->
				<div class="text-gray-600 leading-relaxed mb-8 space-y-4">
					<?php
					$paragraphs = explode( "\n\n", $tentang_text );
					foreach ( $paragraphs as $para ) {
						if ( trim( $para ) ) {
							echo '<p>' . esc_html( trim( $para ) ) . '</p>';
						}
					}
					?>
				</div>

				<!-- Poin unggulan -->
				<ul class="space-y-3 mb-8">
					<?php foreach ( $poin_unggulan as $poin ) : ?>
						<li class="flex items-start gap-3">
							<div class="flex-shrink-0 w-5 h-5 rounded-full bg-tertiary/15 flex items-center justify-center mt-0.5">
								<svg class="w-3 h-3 text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
								</svg>
							</div>
							<span class="text-gray-700 text-sm"><?php echo esc_html( $poin ); ?></span>
						</li>
					<?php endforeach; ?>
				</ul>

				<!-- CTA -->
				<div class="flex flex-wrap gap-4">
					<a
						href="<?php echo esc_url( home_url( '/profil' ) ); ?>"
						class="inline-flex items-center px-6 py-3 bg-primary hover:bg-blue-700 text-white font-semibold rounded-xl transition-colors shadow-sm"
					>
						Profil Perusahaan
					</a>
					<a
						href="#kontak"
						class="inline-flex items-center px-6 py-3 border-2 border-gray-200 hover:border-primary text-gray-700 hover:text-primary font-semibold rounded-xl transition-colors"
					>
						Hubungi Kami
					</a>
				</div>
			</div>

		</div>
	</div>
</section>
