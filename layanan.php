<?php
$layanan = $_GET['layanan'] ?? 'Layanan';

// Array data layanan BKPSDM
$data = [
    "Disiplin" => ["⚖", "Layanan Disiplin ASN", "Informasi mengenai presensi, pembinaan, tata cara penghentian/pengaktifan gaji, pemeriksaan dan proses hukuman disiplin ASN."],
    "SKP" => ["✓", "Layanan SKP", "Informasi penyusunan, penginputan, pemantauan dan penilaian Sasaran Kinerja Pegawai."],
    "Kepangkatan" => ["▣", "Layanan Kepangkatan", "Informasi usulan kenaikan pangkat (Reguler, KPO, Fungsional, Penyesuaian Ijazah) dan berkas persyaratannya."],
    "Berkala" => ["◷", "Layanan Kenaikan Gaji Berkala", "Informasi persyaratan dan proses layanan kenaikan gaji berkala."],
    "Fungsional" => ["★", "Layanan Jabatan Fungsional", "Informasi pengelolaan dan administrasi jabatan fungsional ASN."],
    "Jenjang Jabatan" => ["↕", "Layanan Jenjang Jabatan", "Informasi jenjang, persyaratan dan administrasi jabatan ASN."],
    "Mutasi" => ["⇄", "Layanan Mutasi", "Informasi perpindahan dan penempatan ASN sesuai ketentuan."],
    "Promosi" => ["◆", "Layanan Promosi", "Informasi promosi jabatan dan pengembangan karier ASN."],
    "Pencantuman Gelar" => ["🎓", "Layanan Pencantuman Gelar", "Informasi persyaratan, lampiran usulan, dan link pendaftaran pencantuman gelar ASN."]
];

$item = $data[$layanan] ?? ["●", "Layanan BKPSDM", "Informasi layanan BKPSDM Kabupaten Kepulauan Aru."];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($item[1]) ?> - BIDANG MUTASI, PROMOSI, KEPANGKATAN, PENILAIAN KINERJA DAN DISIPLIN ASN Aru</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --success: #16a34a;
            --success-hover: #15803d;
            --dark: #0f172a;
            --gray-light: #f8fafc;
            --border: #e2e8f0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f1f5f9;
            color: #334155;
            margin: 0;
            padding-top: 80px;
        }

        /* NAVBAR STICKY / FIXED */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            box-sizing: border-box;
        }

        /* HERO SECTION ATTRACTIVE */
        .page-hero-custom {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: #fff;
            padding: 40px 20px;
            text-align: center;
            border-radius: 0 0 24px 24px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.15);
        }

        .hero-badge {
            display: inline-block;
            background: rgba(37, 99, 235, 0.2);
            color: #60a5fa;
            border: 1px solid rgba(96, 165, 250, 0.3);
            padding: 4px 14px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 12px;
            text-transform: uppercase;
        }

        .hero-icon-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 10px;
        }

        .hero-icon {
            font-size: 2.2rem;
            background: #2563eb;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            color: #fff;
            box-shadow: 0 8px 16px rgba(37, 99, 235, 0.3);
        }

        .page-hero-custom h1 {
            font-size: 1.8rem;
            font-weight: 800;
            margin: 0;
            color: #ffffff;
        }

        .page-hero-custom p {
            max-width: 650px;
            margin: 10px auto 0;
            color: #94a3b8;
            font-size: 0.95rem;
        }

        /* MAIN CONTAINER */
        .container-custom {
            max-width: 900px;
            margin: 0 auto 50px;
            padding: 0 20px;
        }

        /* CARD BOXES */
        .service-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--primary);
        }

        .service-card.card-green::before {
            background: var(--success);
        }

        .service-card h3 {
            color: #0f172a;
            font-size: 1.25rem;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 1px dashed #cbd5e1;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-card h4 {
            color: #1e293b;
            font-size: 1.05rem;
            margin-top: 25px;
            margin-bottom: 12px;
            font-weight: 700;
        }

        .service-card h5 {
            color: #334155;
            font-size: 0.95rem;
            margin-top: 18px;
            margin-bottom: 8px;
            font-weight: 600;
        }

        /* LIST STYLING */
        .req-list {
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
            counter-reset: req-step;
        }

        .req-list li {
            position: relative;
            padding-left: 45px;
            margin-bottom: 14px;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .req-list li::before {
            counter-increment: req-step;
            content: counter(req-step);
            position: absolute;
            left: 0;
            top: 2px;
            width: 28px;
            height: 28px;
            background: #eff6ff;
            color: var(--primary);
            font-weight: 700;
            font-size: 0.85rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #bfdbfe;
        }

        /* UNORDERED LIST STYLING */
        .bullet-list {
            padding-left: 20px;
            margin-bottom: 20px;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .bullet-list li {
            margin-bottom: 8px;
        }

        /* BUTTON STYLING */
        .btn-group {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .btn-custom {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.88rem;
            text-decoration: none;
            transition: all 0.25s ease;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .btn-blue {
            background-color: var(--primary);
            color: #ffffff !important;
        }

        .btn-blue:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(37, 99, 235, 0.3);
        }

        .btn-green {
            background-color: var(--success);
            color: #ffffff !important;
        }

        .btn-green:hover {
            background-color: var(--success-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(22, 163, 74, 0.3);
        }

        .alert-box {
            background-color: #fefce8;
            border: 1px solid #fef08a;
            border-left: 4px solid #eab308;
            padding: 18px;
            border-radius: 12px;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #713f12;
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #64748b;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            transition: color 0.2s;
        }

        .btn-back:hover {
            color: var(--primary);
        }

        @media (max-width: 768px) {
            body { padding-top: 70px; }
            .service-card { padding: 20px; }
            .btn-group { flex-direction: column; }
            .btn-custom { width: 100%; justify-content: center; }
        }
    </style>
</head>
<body>

<!-- FIXED NAVBAR -->
<header class="navbar">
    <div class="nav-inner">
        <a class="brand" href="index.php">
            <div class="brand-mark">BK</div>
            <div><strong>BIDANG MUTASI, PROMOSI, KEPANGKATAN, PENILAIAN KINERJA DAN DISIPLIN ASN</strong><span>KABUPATEN KEPULAUAN ARU</span></div>
        </a>
        <button class="menu-toggle" onclick="document.querySelector('.nav-menu').classList.toggle('show')">☰</button>
        <nav class="nav-menu">
            <a href="index.php">Beranda</a>
            <div class="dropdown">
                <button class="dropbtn">Layanan <span>⌄</span></button>
                <div class="dropdown-content">
                    <a href="layanan.php?layanan=Disiplin">Disiplin</a>
                    <a href="layanan.php?layanan=Pencantuman%20Gelar">Pencantuman Gelar</a>
                    <a href="layanan.php?layanan=Kepangkatan">Kepangkatan</a>
                    <a href="layanan.php?layanan=Berkala">Berkala</a>
                    <a href="layanan.php?layanan=Mutasi">Mutasi</a>
                    <a href="layanan.php?layanan=Fungsional">Fungsional</a>
                    <a href="layanan.php?layanan=Jenjang%20Jabatan">Jenjang Jabatan</a>
                    <a href="layanan.php?layanan=Promosi">Promosi</a>
                    <a href="layanan.php?layanan=SKP">SKP</a>
                </div>
            </div>
            <a href="kontak.php">Kontak</a>
        </nav>
    </div>
</header>

<!-- HERO SECTION ATTRACTIVE -->
<section class="page-hero-custom">
    <div class="hero-badge">Layanan Publik BIDANG MUTASI, PROMOSI, KEPANGKATAN, PENILAIAN KINERJA DAN DISIPLIN ASN</div>
    <div class="hero-icon-title">
        <div class="hero-icon"><?= $item[0] ?></div>
        <h1><?= htmlspecialchars($item[1]) ?></h1>
    </div>
    <p><?= htmlspecialchars($item[2]) ?></p>
</section>

<!-- MAIN CONTENT -->
<main class="container-custom">

    <?php if ($layanan === 'Disiplin'): ?>
        <!-- SECTION DISIPLIN -->
        <div class="service-card">
            <h3>📌 1. Laporan Pelaksanaan Disiplin</h3>
            <p>Persyaratan Laporan Pelaksanaan Disiplin ASN:</p>
            <ul class="bullet-list">
                <li>Surat Pengantar OPD</li>
                <li>Laporan Pelaksanaan Disiplin</li>
            </ul>
            <div class="btn-group">
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLScUpauZ1v2ACjeawHMQhGcusQcI51c1U25wU_N-lC2u3Qwd7Q/viewform?usp=dialog" target="_blank">📝 Teken Usul Laporan Disiplin</a>
            </div>
        </div>

        <div class="service-card">
            <h3>⚖️ 2. Pemberhentian dan Pengaktifan Pembayaran Gaji ASN</h3>
            
            <h4>TATA CARA PEMBERHENTIAN PEMBAYARAN GAJI PNS YANG TIDAK MASUK KERJA</h4>
            <p style="font-size:0.9rem; color:#64748b;"><em>(Khusus bagi PNS yang tidak masuk kerja tanpa alasan yang sah selama 10 hari kerja secara terus-menerus)</em></p>
            
            <ul class="bullet-list">
                <li>PNS yang tidak Masuk Kerja dan tidak menaati ketentuan jam kerja tanpa alasan yang sah secara terus menerus selama 10 (sepuluh) hari kerja, dihentikan pembayaran gajinya sejak bulan berikutnya.</li>
                <li>Penghentian pembayaran gaji tidak perlu menunggu keputusan Hukuman Disiplin.</li>
                <li>Pelanggaran dihitung secara kumulatif sampai dengan akhir tahun berjalan (bulan Januari s.d. Desember).</li>
                <li>Penjatuhan Hukuman Disiplin ditingkatkan menjadi lebih berat dari Hukuman Disiplin sebelumnya apabila jumlah tidak Masuk Kerja telah mencapai jumlah yang ditentukan.</li>
            </ul>

            <h5>Tahapan Penghentian Pembayaran Gaji:</h5>
            <ol class="req-list">
                <li>Atasan langsung atau pimpinan Unit Kerja memberitahukan secara tertulis kepada BKPSDM.</li>
                <li>BKPSDM melakukan verifikasi dan validasi terhadap kebenaran data tidak Masuk Kerja.</li>
                <li>Hasil verifikasi disampaikan kepada Pimpinan Unit Kerja/Kuasa Pengguna Anggaran (KPA) sebagai dasar penghentian pembayaran gaji.</li>
                <li>KPA melaksanakan penghentian pembayaran gaji yang ditetapkan dalam keputusan KPA.</li>
                <li>Jika KPA merupakan Pejabat Pimpinan Tinggi Madya, pelaksanaan penghentian dapat didelegasikan kepada Pejabat Pimpinan Tinggi Pratama yang membidangi urusan keuangan.</li>
                <li>Tata cara dilaksanakan sesuai ketentuan peraturan perundang-undangan pelaksanaan APBD/APBN.</li>
            </ol>

            <div class="btn-group">
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1ANVUd5HN9SeTG8XjJ10alAMRCXyfkF6Z/edit?usp=drive_link&ouid=116644558643606622508&rtpof=true&sd=true" target="_blank">📄 Format Usul Pemberhentian Pembayaran Gaji</a>
            </div>

            <hr style="border:0; border-top:1px dashed #cbd5e1; margin:25px 0;">

            <h4>TATA CARA PENGAJUAN PENGAKTIFAN KEMBALI PEMBAYARAN GAJI PNS</h4>
            <p style="font-size:0.9rem; color:#64748b;"><em>(Khusus bagi PNS yang akan diajukan pengaktifan pembayaran gajinya setelah diberhentikan)</em></p>

            <h5>Tahapan Pengajuan Pengaktifan Kembali:</h5>
            <ol class="req-list">
                <li>
                    Atasan langsung secara berjenjang/pimpinan Unit Kerja mengajukan secara tertulis <strong>Surat Usul Pengaktifan Pembayaran Gaji PNS</strong> ke BKPSDM, dengan kelengkapan:
                    <ul class="bullet-list" style="margin-top:8px;">
                        <li>Surat Pernyataan dari Atasan Langsung bahwa PNS telah melaksanakan tugas (bermaterai 10.000) dan diketahui Pimpinan Unit Kerja.</li>
                        <li>Surat Pernyataan dari PNS yang bersangkutan (bermaterai 10.000).</li>
                        <li>Rekapitulasi Absensi/Kehadiran Kerja PNS yang bersangkutan (minimal 1 bulan).</li>
                        <li>Salinan dokumen hasil pemeriksaan/penjatuhan Hukuman Disiplin (Surat Panggilan, BAP Ketidakhadiran/BAP Pemeriksaan, LHP, dan/atau SK HD Ringan jika ada).</li>
                        <li>Dokumen pendukung lainnya yang dianggap perlu (foto, laporan kinerja, dll).</li>
                    </ul>
                </li>
                <li>BKPSDM melakukan verifikasi dan validasi terhadap kebenaran data PNS dimaksud.</li>
                <li>Hasil verifikasi disampaikan kepada Pimpinan Unit Kerja/KPA sebagai dasar pengaktifan kembali pembayaran gaji.</li>
                <li>KPA melaksanakan pengaktifan kembali pembayaran gaji serta berkoordinasi dengan unit kerja keuangan.</li>
                <li>Pengdelegasian dapat dilakukan jika KPA merupakan Pejabat Pimpinan Tinggi Madya.</li>
                <li>Tata cara dilaksanakan sesuai ketentuan peraturan perundang-undangan pelaksanaan APBD/APBN.</li>
            </ol>

            <div class="btn-group">
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1rH16mWgUzQwARNHJLeEO2X6Vn8kb6yVS/edit?rtpof=true&sd=true&tab=t.0" target="_blank">📄 Format Surat Usul Pengaktifan Gaji</a>
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1m_yn0FVsP1Tg_pHnP9BQUuI9JAce1msl/edit?rtpof=true&sd=true&tab=t.0" target="_blank">📄 Surat Pernyataan Atasan Langsung</a>
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1DRNk_AyL3_H3YiaxY_5Nv6rXIZfjh9Ri/edit?usp=sharing&ouid=116644558643606622508&rtpof=true&sd=true" target="_blank">📄 Surat Pernyataan ASN Bersangkutan</a>
            </div>
        </div>

        <div class="service-card">
            <h3>🚨 3. Hukuman Disiplin ASN</h3>
            
            <h4>A. TATA CARA PEMERIKSAAN DUGAAN PELANGGARAN DISIPLIN PNS</h4>
            <p style="font-size:0.9rem; color:#64748b;">Format Berkas Pemeriksaan Dugaan Pelanggaran Disiplin ASN:</p>
            <div class="btn-group">
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/11T8Ko_Uh6EiGED8uuVZL563iftk8CZtG/edit?rtpof=true&sd=true&tab=t.0" target="_blank">📄 Surat Panggilan</a>
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1phuIds3NNXM5o6N0jCdEdMjPOF5Q9o7H/edit?rtpof=true&sd=true&tab=t.0" target="_blank">📄 SK Pembebasan Sementara Dari Jabatan</a>
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1wdEWtgvMhq1ABZvwI8KZeOHLvUzjNJp-/edit?rtpof=true&sd=true&tab=t.0" target="_blank">📄 BAP Pemeriksaan</a>
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1IzXExS9RCNgS2olGH_VIw4CAWZMKUMuo/edit" target="_blank">📄 BAP Apabila Tidak Hadir</a>
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1a5jnEEgd3qbkpvei08P3jG9CZxx50qOh/edit?rtpof=true&sd=true&tab=t.0" target="_blank">📄 Laporan Hasil Pemeriksaan (LHP)</a>
            </div>
            <p style="font-size:0.85rem; color:#64748b; margin-top:5px;"><em>*Catatan: Tim Pemeriksa dibentuk apabila dugaan pelanggaran disiplin pada tingkat Sedang dan Berat (saat pemeriksaan berada pada tingkat akhir/fasilitasi oleh BKPSDM). Pembebasan sementara dari jabatan dilakukan apabila diduga melakukan pelanggaran tingkat berat.</em></p>

            <hr style="border:0; border-top:1px dashed #cbd5e1; margin:25px 0;">

            <h4>B. TATA CARA PENJATUHAN DAN PENYAMPAIAN HUKUMAN DISIPLIN PNS</h4>
            <p style="font-size:0.9rem; color:#64748b;">Format Penjatuhan Hukuman Disiplin Ringan oleh Atasan Langsung:</p>
            <div class="btn-group">
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1n-ZImCnMga698zi9Ka8RzPhpDPvVDGe_/edit?rtpof=true&sd=true&tab=t.0" target="_blank">📄 HD Teguran Lisan</a>
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1nJ9Y9aos8BdrfwkqOCOvFjVZhNlxNQbA/edit?rtpof=true&sd=true&tab=t.0" target="_blank">📄 HD Teguran Tertulis</a>
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1hU7k3dqPVQHk-vQ844nJ-1ABwduRaMJ0/edit?rtpof=true&sd=true&tab=t.0" target="_blank">📄 HD Pernyataan Tidak Puas Secara Tertulis</a>
                <a class="btn-custom btn-blue" href="https://docs.google.com/document/d/1DXOaLqJqUFiaI_SsR3h4-m05QcMcdF6q/edit?rtpof=true&sd=true&tab=t.0" target="_blank">📄 Surat Panggilan Menerima Keputusan HD</a>
            </div>
            <p style="font-size:0.85rem; color:#16a34a; font-weight:600; margin-top:5px;"><em>*Ketiga jenis hukuman disiplin di atas dapat diberikan langsung oleh Atasan Langsung.</em></p>

            <div class="alert-box">
                <strong>Pelaporan Pelanggaran Tingkat Sedang & Berat:</strong><br>
                Untuk pelanggaran disiplin ASN yang tingkat hukuman disiplinnya Sedang dan Berat yang menjadi kewenangan pejabat di atasnya, silakan laporkan melalui tombol di bawah ini. Laporan Anda akan segera ditindaklanjuti oleh BKPSDM Kabupaten Kepulauan Aru.<br><br>
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLScUpauZ1v2ACjeawHMQhGcusQcI51c1U25wU_N-lC2u3Qwd7Q/viewform" target="_blank">📝 Tekan Usul Laporan Disiplin</a>
            </div>
        </div>

    <?php elseif ($layanan === 'Kepangkatan'): ?>
        <!-- SECTION KEPANGKATAN -->
        <div class="service-card">
            <h3>1. Kenaikan Pangkat Reguler Dan KPO</h3>
            <ul class="req-list">
                <li>Scan Surat Pengantar dari Dinas/OPD.</li>
                <li>Scan Dokumen Persyaratan (Masukkan link pada lampiran spreadsheet).</li>
                <li>Lampiran Usulan (Download dan upload ke Drive Instansi).</li>
            </ul>
            <div class="btn-group">
                <a class="btn-custom btn-blue" href="https://docs.google.com/spreadsheets/d/1IVbUwnXsOQ93mjUAbC97KLRXa5rzfuRrxl7I_A9216s/edit" target="_blank">📊 Download Lampiran Reguler Dan KPO</a>
                <a class="btn-custom btn-blue" href="https://docs.google.com/spreadsheets/d/1vJgZPbKkKSPQiMDxZWVmgg2h99ISZo7eWalf3tuAVGE/edit" target="_blank">📊 Download Lampiran Struktural</a>
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLSf9fuh67-fY9yoAXAXx9jr15IZbYkEsKXXFMX4guyMdBPo_mQ/viewform" target="_blank">🚀 Form Usul KP Reguler & KPO</a>
            </div>
        </div>

        <div class="service-card">
            <h3>2. Kenaikan Pangkat Jabatan Fungsional</h3>
            <ul class="req-list">
                <li>Scan Surat Pengantar dari Dinas.</li>
                <li>Scan Dokumen Persyaratan lengkap.</li>
                <li>Lampiran Usulan (Google Spreadsheet).</li>
            </ul>
            <div class="btn-group">
                <a class="btn-custom btn-blue" href="https://docs.google.com/spreadsheets/d/1TFwtI9Rhcma9K6klkz64THxXXkqZqXracFqCQBY1s7c/edit" target="_blank">📊 Download Lampiran Fungsional</a>
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLScpnqvWWQfexdq1Fkvw-iuSG3ArFjNwWvgdomzGHlg8vnbTag/viewform" target="_blank">🚀 Form Usul KP Fungsional</a>
            </div>
        </div>

        <div class="service-card">
            <h3>3. Kenaikan Pangkat Penyesuaian Ijazah</h3>
            <ul class="req-list">
                <li>Scan Surat Pengantar dari Dinas.</li>
                <li>Scan Dokumen Persyaratan pendukung.</li>
                <li>Lampiran Usulan Penyesuaian Ijazah.</li>
            </ul>
            <div class="btn-group">
                <a class="btn-custom btn-blue" href="https://docs.google.com/spreadsheets/d/1zJ0AX7VIrHR2pNExWvGLIsPuVmygER08b00jl9jgu9s/edit" target="_blank">📊 Download Lampiran Penyesuaian Ijazah</a>
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLSehbvjBwKLNzEtKpm6pIfcQKEVeIl0yE-7YznxZDjIyOpshQQ/viewform" target="_blank">🚀 Form Usul Penyesuaian Ijazah</a>
            </div>
        </div>

    <?php elseif ($layanan === 'Berkala'): ?>
        <!-- SECTION KENAIKAN GAJI BERKALA (KGB) -->
        <div class="service-card card-green">
            <h3>👔 USUL KENAIKAN GAJI BERKALA (KGB) UNTUK PNS</h3>
            <h4>Persyaratan Berkas:</h4>
            <ul class="req-list">
                <li>Scan Surat Pengantar dari Dinas.</li>
                <li>Scan SK Pangkat Terakhir.</li>
                <li>Scan Surat KGB Terakhir.</li>
                <li>Scan SK Jabatan Terakhir <em>(opsional)</em>.</li>
                <li>Scan SK Mutasi <em>(opsional)</em>.</li>
                <li>Penilaian Kinerja 2 Tahun Terakhir (telah diinput & dinilai Atasan Langsung).</li>
                <li>Masukkan link masing-masing dokumen pada poin 3-6 di dalam Spreadsheet Lampiran.</li>
                <li>Surat Pengantar dan Lampiran Usulan (poin 1 & 7) dimasukkan ke dalam Google Drive Instansi.</li>
            </ul>
            <div class="btn-group">
                <a class="btn-custom btn-blue" href="https://docs.google.com/spreadsheets/d/1tXaq7KHRojXQPd5Q40KrHlRWEh1nLTYt5EFKol7-HxE/edit" target="_blank">📊 Download Lampiran Usulan Spreadsheet</a>
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLSfgeIj8ayF0AxkTAg9roOod5SKb2LYB6nQw1MNkj1CD3Y6MMw/viewform" target="_blank">🚀 Tekan Form Usul KGB PNS</a>
            </div>
        </div>

        <div class="service-card card-green">
            <h3>🤝 USUL KENAIKAN GAJI BERKALA (KGB) UNTUK PPPK</h3>
            <h4>Persyaratan Berkas:</h4>
            <ul class="req-list">
                <li>Scan Surat Pengantar dari Dinas.</li>
                <li>Scan SK Pangkat Terakhir.</li>
                <li>Scan Surat KGB Terakhir.</li>
                <li>Scan SK Jabatan Terakhir <em>(opsional)</em>.</li>
                <li>Scan SK Mutasi <em>(opsional)</em>.</li>
                <li>Penilaian Kinerja 2 Tahun Terakhir (telah diinput & dinilai Atasan Langsung).</li>
                <li>Masukkan link masing-masing dokumen pada poin 3-6 di dalam Spreadsheet Lampiran.</li>
                <li>Surat Pengantar dan Lampiran Usulan (poin 1 & 7) dimasukkan ke dalam Google Drive Instansi.</li>
            </ul>
            <div class="btn-group">
                <a class="btn-custom btn-blue" href="https://docs.google.com/spreadsheets/d/1tXaq7KHRojXQPd5Q40KrHlRWEh1nLTYt5EFKol7-HxE/edit" target="_blank">📊 Download Lampiran Usulan Spreadsheet</a>
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLSeAUiqOj1oeRQFDfY2zJW9QGXxo7lAZ47eF08T7XzZ9EaWYlg/viewform" target="_blank">🚀 Tekan Form Usul KGB PPPK</a>
            </div>
        </div>

    <?php elseif ($layanan === 'Mutasi'): ?>
        <!-- SECTION MUTASI -->
        <div class="service-card">
            <h3>📑 Persyaratan Mutasi Luar & Dalam Daerah</h3>
            <ul class="req-list">
                <li>Surat Permohonan Pribadi ke Bupati Kepulauan Aru</li>
                <li>Surat Usul dari PPK Instansi Penerima dengan menyebutkan nama jabatan</li>
                <li>ANJAB / ABK dari instansi penerima dan asal</li>
                <li>SK CPNS & SK PNS (Legalisir)</li>
                <li>FC SK Pangkat Terakhir & Karpeg (Legalisir)</li>
                <li>SKP 2 Tahun terakhir</li>
                <li>Surat Keterangan Bebas Temuan Inspektorat & Bebas Hukuman Disiplin</li>
                <li>Surat Pernyataan Tidak Menjalani Tugas Belajar & Tidak Sedang Dalam Proses KP</li>
                <li>FC KTP & Rekomendasi/Persetujuan OPD</li>
            </ul>
            <h4>Pilih Jenis Formulir Usul Mutasi:</h4>
            <div class="btn-group">
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLSdSBG10M-R71c0BRpcXkjmdpGuDQ0a286Gupav8PanY4zSayg/viewform" target="_blank">📝 Mutasi Pindah Masuk/Keluar</a>
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLSfMBYlnsvnREaMr7Xc5jnG_6SHP2igQUFqderQPhYNpOrUdxQ/viewform" target="_blank">📝 Mutasi Dalam Daerah</a>
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLSeypS_5iz6gGtJorgB_SxAVnBZ6IWiziQWahNehLtrGu9rPfQ/viewform" target="_blank">📝 Pengangkatan Jabatan Fungsional</a>
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLSc6frtTAfBdmtH21KPCl49ahBoyvbFSWP6d9NcRIkrLbuucBA/viewform" target="_blank">📝 Pemberhentian Dari Jabatan</a>
            </div>
        </div>

    <?php elseif ($layanan === 'Pencantuman Gelar'): ?>
        <!-- SECTION PENCANTUMAN GELAR -->
        <div class="service-card">
            <h3>🎓 USUL PENCANTUMAN GELAR PNS</h3>
            <ul class="req-list">
                <li>Scan Surat Pengantar dari Dinas/OPD terkait.</li>
                <li>Scan Dokumen Persyaratan (Link dimasukkan pada spreadsheet).</li>
                <li>Download Format Spreadsheet Lampiran Usulan dan simpan ke Google Drive.</li>
            </ul>
            <div class="btn-group">
                <a class="btn-custom btn-blue" href="https://docs.google.com/spreadsheets/d/1PZZ_JFDl72UUkf2lryi8acygs1wB3ihqiySrfMHP4Vk/edit" target="_blank">📊 Download Lampiran Usulan</a>
                <a class="btn-custom btn-green" href="https://docs.google.com/forms/d/e/1FAIpQLScWPPSrQ4tKxm0aen-kG8nauCTyaIAD3zR87eHfILp38-GUCA/viewform" target="_blank">🚀 Tekan Form Usul Pencantuman Gelar</a>
            </div>
        </div>

    <?php else: ?>
        <div class="service-card" style="text-align:center;">
            <h3>ℹ️ Informasi Layanan</h3>
            <p>Halaman layanan ini siap digunakan untuk menampilkan berkas, persyaratan, dan formulir usulan online.</p>
        </div>
    <?php endif; ?>

    <a class="btn-back" href="index.php">← Kembali ke Halaman Utama</a>
</main>

<footer>
    <div><strong>BIDANG MUTASI, PROMOSI, KEPANGKATAN, PENILAIAN KINERJA DAN DISIPLIN ASN Kabupaten Kepulauan Aru</strong><br><small>Dobo, Maluku</small></div>
    <div style="margin-top:8px; font-size:0.85rem; opacity:0.8;">© <?= date("Y") ?> BIDANG MUTASI, PROMOSI, KEPANGKATAN, PENILAIAN KINERJA DAN DISIPLIN ASN Kabupaten Kepulauan Aru</div>
</footer>

</body>
</html>