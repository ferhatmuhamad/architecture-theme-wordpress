<?php
/**
 * IKP Theme — Section: Hero
 *
 * Background image, overlay, eyebrow, judul, CTA button.
 *
 * @package ikp-theme
 */

// Ambil nilai ACF (fallback ke konten default jika ACF belum diisi).
$hero_eyebrow    = ikp_get_field( 'hero_eyebrow', get_the_ID(), 'General Supplier, Architecture and Kontraktor' );
$hero_title      = ikp_get_field( 'hero_title', get_the_ID(), 'Penyedia Jasa Konstruksi & Renovasi Bangunan Terpercaya' );
$hero_subtitle   = ikp_get_field( 'hero_subtitle', get_the_ID(), 'CV. Istimewa Karya Presisi hadir dengan pengalaman 15 tahun untuk mewujudkan bangunan impian Anda — dari renovasi rumah hingga proyek komersial skala besar di Yogyakarta.' );
$hero_cta_text   = ikp_get_field( 'hero_cta_text', get_the_ID(), 'Konsultasi Sekarang' );
$hero_cta_link   = ikp_get_field( 'hero_cta_link', get_the_ID(), '#kontak' );
$hero_background = ikp_get_field( 'hero_background', get_the_ID(), false );

// URL fallback background hero (foto konstruksi dari Unsplash).
$fallback_bg = 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1920&q=80&auto=format&fit=crop';

// Tentukan style background.
$bg_style = ikp_bg_image_style( $hero_background, $fallback_bg );
?>

<!-- ============================================================
     Section 1: Hero
     ============================================================ -->
<section
	id="hero"
	class="relative min-h-[80vh] flex items-center justify-center bg-gray-900 bg-cover bg-center"
	style="<?php echo esc_attr( $bg_style ); ?>"
	aria-labelledby="hero-heading"
>
	<!-- Overlay gradient gelap -->
	<div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 via-gray-900/60 to-gray-900/40" aria-hidden="true"></div>

	<!-- Konten Hero -->
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center lg:text-left">
		<div class="max-w-3xl">

			<!-- Eyebrow badge -->
			<?php if ( $hero_eyebrow ) : ?>
				<div class="inline-flex items-center mb-6">
					<span class="bg-yellow-400 text-yellow-900 text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wide">
						<?php echo esc_html( $hero_eyebrow ); ?>
					</span>
				</div>
			<?php endif; ?>

			<!-- Judul Utama -->
			<h1 id="hero-heading" class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-white leading-tight mb-6">
				<?php echo esc_html( $hero_title ); ?>
			</h1>

			<!-- Subtitle -->
			<?php if ( $hero_subtitle ) : ?>
				<p class="text-base sm:text-lg text-gray-300 leading-relaxed mb-8 max-w-2xl">
					<?php echo esc_html( $hero_subtitle ); ?>
				</p>
			<?php endif; ?>

			<!-- CTA Buttons -->
			<div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
				<a
					href="<?php echo esc_url( $hero_cta_link ); ?>"
					class="inline-flex items-center justify-center px-8 py-4 bg-tertiary hover:bg-green-700 text-white font-bold text-base rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5"
				>
					<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
					<?php echo esc_html( strtoupper( $hero_cta_text ) ); ?>
				</a>
				<a
					href="<?php echo esc_url( home_url( '/proyek' ) ); ?>"
					class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white hover:bg-white hover:text-gray-900 font-bold text-base rounded-xl transition-all duration-200"
				>
					<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
					Lihat Proyek Kami
				</a>
			</div>

		</div>
	</div><!-- /.max-w-7xl -->

	<!-- Statistik singkat di bagian bawah hero -->
	<div class="absolute bottom-0 left-0 right-0 bg-white/10 backdrop-blur-sm border-t border-white/20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
			<div class="grid grid-cols-3 gap-4 text-center text-white">
				<div>
					<div class="text-2xl lg:text-3xl font-bold text-yellow-400">15+</div>
					<div class="text-xs lg:text-sm text-gray-300 mt-0.5">Tahun Pengalaman</div>
				</div>
				<div>
					<div class="text-2xl lg:text-3xl font-bold text-yellow-400">200+</div>
					<div class="text-xs lg:text-sm text-gray-300 mt-0.5">Proyek Selesai</div>
				</div>
				<div>
					<div class="text-2xl lg:text-3xl font-bold text-yellow-400">100%</div>
					<div class="text-xs lg:text-sm text-gray-300 mt-0.5">Klien Puas</div>
				</div>
			</div>
		</div>
	</div>

</section>
