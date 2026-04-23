<?php
/**
 * IKP Theme — Section: Keunggulan Kami
 *
 * Layout: heading di kiri, grid keunggulan di kanan.
 *
 * @package ikp-theme
 */

// Ambil data keunggulan dari ACF repeater, atau gunakan default.
$keunggulan_items = ikp_get_field( 'keunggulan_items', get_the_ID(), array() );

// Data default jika ACF belum diisi.
$default_keunggulan = array(
	array(
		'icon'        => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
		'title'       => 'Tim Profesional & Berpengalaman',
		'description' => 'Didukung oleh tenaga ahli bersertifikat dengan pengalaman lebih dari 15 tahun di bidang konstruksi dan arsitektur.',
		'highlight'   => false,
	),
	array(
		'icon'        => 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z',
		'title'       => 'RAB Gratis & Transparan',
		'description' => 'Kami menyediakan Rencana Anggaran Biaya (RAB) secara gratis dan transparan sebelum proyek dimulai.',
		'highlight'   => false,
	),
	array(
		'icon'        => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z',
		'title'       => 'Konsultasi & Survei Lokasi Gratis',
		'description' => 'Konsultasi desain dan survei lokasi tanpa biaya, agar perencanaan proyek Anda lebih matang dan terukur.',
		'highlight'   => true, // Ini akan diberi background hijau
	),
	array(
		'icon'        => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
		'title'       => 'Pekerjaan Bergaransi',
		'description' => 'Setiap pekerjaan kami disertai garansi, sebagai bentuk tanggung jawab dan komitmen kami terhadap kualitas.',
		'highlight'   => false,
	),
	array(
		'icon'        => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
		'title'       => 'Fleksibel & Tepat Waktu',
		'description' => 'Kami berkomitmen menyelesaikan setiap proyek sesuai timeline yang disepakati, tanpa mengorbankan kualitas.',
		'highlight'   => false,
	),
	array(
		'icon'        => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
		'title'       => 'Pelayanan Ramah & Fast Response',
		'description' => 'Tim kami siap melayani dengan ramah dan responsif, merespons pertanyaan dan kebutuhan Anda dengan cepat.',
		'highlight'   => false,
	),
);

// Gunakan data dari ACF jika tersedia, jika tidak gunakan default.
$items = ! empty( $keunggulan_items ) ? $keunggulan_items : $default_keunggulan;
?>

<!-- ============================================================
     Section 4: Keunggulan Kami
     ============================================================ -->
<section id="keunggulan" class="py-16 lg:py-24 bg-gray-50">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

		<div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">

			<!-- Kolom Kiri: Heading & CTA -->
			<div class="lg:col-span-1 flex flex-col justify-between">
				<div>
					<span class="inline-block text-primary font-semibold text-sm uppercase tracking-widest mb-4">
						Mengapa Memilih Kami?
					</span>
					<h2 class="text-3xl lg:text-4xl font-bold text-gray-900 leading-tight mb-6">
						Keunggulan Kami
					</h2>
					<p class="text-gray-500 leading-relaxed">
						Kami hadir dengan komitmen penuh untuk memberikan layanan konstruksi terbaik, transparan, dan bergaransi demi kepuasan Anda.
					</p>
				</div>

				<div class="mt-8 lg:mt-0">
					<a
						href="<?php echo esc_url( home_url( '/profil' ) ); ?>"
						class="inline-flex items-center px-6 py-3.5 bg-tertiary hover:bg-green-700 text-white font-semibold rounded-xl transition-colors shadow-sm"
					>
						<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
						LIHAT KANTOR KAMI
					</a>
				</div>
			</div>

			<!-- Kolom Kanan: Grid Keunggulan -->
			<div class="lg:col-span-2">
				<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
					<?php foreach ( $items as $item ) :
						// Ambil nilai dari array ACF atau array default.
						$icon        = ! empty( $item['icon'] ) ? $item['icon'] : '';
						$title       = ! empty( $item['title'] ) ? $item['title'] : '';
						$description = ! empty( $item['description'] ) ? $item['description'] : ( ! empty( $item['desc'] ) ? $item['desc'] : '' );
						$highlight   = ! empty( $item['highlight'] );

						$card_class   = $highlight ? 'bg-tertiary text-white shadow-lg' : 'bg-white border border-gray-100 hover:border-primary/30';
						$title_class  = $highlight ? 'text-white' : 'text-gray-900';
						$desc_class   = $highlight ? 'text-green-100' : 'text-gray-500';
						$icon_bg      = $highlight ? 'bg-white/20' : 'bg-primary/10';
						$icon_color   = $highlight ? 'text-white' : 'text-primary';
						?>
						<div class="<?php echo esc_attr( $card_class ); ?> rounded-2xl p-6 transition-shadow hover:shadow-md">
							<!-- Icon -->
							<?php if ( $icon ) : ?>
								<div class="w-10 h-10 rounded-xl <?php echo esc_attr( $icon_bg ); ?> flex items-center justify-center mb-4">
									<svg class="w-5 h-5 <?php echo esc_attr( $icon_color ); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo esc_attr( $icon ); ?>"/>
									</svg>
								</div>
							<?php endif; ?>
							<!-- Judul -->
							<h3 class="font-bold <?php echo esc_attr( $title_class ); ?> mb-2 text-sm lg:text-base">
								<?php echo esc_html( $title ); ?>
							</h3>
							<!-- Deskripsi -->
							<p class="text-sm <?php echo esc_attr( $desc_class ); ?> leading-relaxed">
								<?php echo esc_html( $description ); ?>
							</p>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

		</div>
	</div>
</section>
