<?php 
$menu = [ 
    "DISIPLIN" => "layanan.php?layanan=Disiplin", 
    "SKP" => "layanan.php?layanan=SKP", 
    "KEPANGKATAN" => "layanan.php?layanan=Kepangkatan", 
    "BERKALA" => "layanan.php?layanan=Berkala", 
    "FUNGSIONAL" => "layanan.php?layanan=Fungsional", 
    "JENJANG JABATAN" => "layanan.php?layanan=Jenjang+Jabatan", 
    "MUTASI" => "layanan.php?layanan=Mutasi", 
    "PROMOSI" => "layanan.php?layanan=Promosi" 
]; 

// Data 15 Pegawai Tim Kerja (Tambahkan path foto pada key 'foto' jika ada) 
$pegawai = [ 
    ["nama" => "Achmad Wis Hady F., S.Kep. Ns", "nip" => "19880602 201001 1 005", "jabatan" => "Kepala Bidang", "foto" => "assets/img/pegawai1.jpg"], 
    ["nama" => "Jojor Norawita Marpaung", "nip" => "19860202 201101 1 002", "jabatan" => "Analis SDM Aparatur Ahli Muda", "foto" => ""], 
    ["nama" => "Samsia Lakwan", "nip" => "19870303 201201 1 003", "jabatan" => "Analis Kepegawaian", "foto" => ""], 
    ["nama" => "Kristiani Refialy", "nip" => "19880404 201301 2 004", "jabatan" => "Pengelola Kenaikan Pangkat", "foto" => ""], 
    ["nama" => "Agusthinus M Pardjer", "nip" => "19890505 201401 1 005", "jabatan" => "Pengelola Disiplin Pegawai", "foto" => ""], 
    ["nama" => "Piter Keliwulan", "nip" => "19900606 201501 2 006", "jabatan" => "Pengelola Data Kinerja", "foto" => ""], 
    ["nama" => "Christin Natalia Syahailatua", "nip" => "19910707 201601 1 007", "jabatan" => "Pengelola Mutasi Pegawai", "foto" => ""], 
    ["nama" => "Khusnul Khotimah", "nip" => "19920808 201701 2 008", "jabatan" => "Pengelola Jabatan Fungsional", "foto" => ""], 
    ["nama" => "Deliana Orun", "nip" => "19930909 201801 1 009", "jabatan" => "Pranata Komputer", "foto" => ""], 
    ["nama" => "Asrun Sugiarto", "nip" => "19941010 201901 2 010", "jabatan" => "Pengolah Data Formasi", "foto" => ""], 
    ["nama" => "Valentino Siahaya", "nip" => "19951111 202001 1 011", "jabatan" => "Pengadministrasi Kepegawaian", "foto" => ""], 
]; 
?> 
<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PLATFORM LAYANAN BIDANG MUTASI, PROMOSI, KEPANGKATAN, PENILAIAN KINERJA DAN DISIPLIN ASN</title> 
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <style> 
        /* GANTI CSS BRAND-MARK UNTUK LOGO GAMBAR */
        .brand-logo-img {
            height: 45px;
            width: auto;
            object-fit: contain;
            display: block;
        }

        /* HERO BACKGROUND DENGAN GAMBAR TIM ASN */ 
        .hero { position: relative; padding: 120px 25px 100px; text-align: center; color: #ffffff; background: url('assets/img/tim_asn.jpg') no-repeat center center / cover; overflow: hidden; } 
        .hero-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(15, 23, 42, 0.82) 0%, rgba(30, 41, 59, 0.75) 100%); z-index: 1; } 
        .hero-content { position: relative; z-index: 2; max-width: 950px; margin: 0 auto; } 
        .eyebrow { color: #ffffff; font-size: 0.85rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 25px; opacity: 0.9; } 
        .hero h1 { font-size: 3.5rem; font-weight: 900; color: #eab308; margin: 10px 0 25px 0; letter-spacing: 2px; text-shadow: 2px 4px 10px rgba(0, 0, 0, 0.5); } 
        .hero-box-tag { display: inline-block; background: rgba(30, 41, 59, 0.9); border: 1px solid rgba(255, 255, 255, 0.2); padding: 14px 32px; border-radius: 8px; color: #ffffff; font-size: 1.05rem; font-weight: 700; letter-spacing: 1px; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3); } 
        
        /* STYLE TIM KERJA & FOTO PEGAWAI */ 
        .team-section { max-width: 1200px; margin: 60px auto; padding: 0 20px; } 
        .team-header { text-align: center; margin-bottom: 40px; } 
        .team-header span { color: #2563eb; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem; } 
        .team-header h2 { font-size: 1.8rem; font-weight: 800; color: #0f172a; margin: 5px 0 10px 0; } 
        .team-header p { color: #64748b; font-size: 0.95rem; margin: 0; } 
        .team-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; } 
        .team-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px 20px; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: all 0.3s ease; } 
        .team-card:hover { transform: translateY(-5px); box-shadow: 0 12px 25px rgba(0,0,0,0.08); border-color: #bfdbfe; } 
        .team-avatar { width: 70px; height: 70px; border-radius: 50%; background: linear-gradient(135deg, #2563eb, #1e40af); color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; font-weight: 700; margin: 0 auto 15px auto; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.25); } 
        .team-avatar-img { width: 70px; height: 70px; border-radius: 50%; object-fit: cover; margin: 0 auto 15px auto; display: block; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); border: 2px solid #2563eb; } 
        .team-role { display: inline-block; background: #eff6ff; color: #2563eb; font-size: 0.75rem; font-weight: 700; padding: 4px 12px; border-radius: 20px; margin-bottom: 10px; } 
        .team-card h4 { margin: 0 0 6px 0; font-size: 1.05rem; font-weight: 700; color: #0f172a; } 
        .team-nip { font-size: 0.82rem; color: #64748b; margin: 0; } 
    </style> 
</head> 
<body> 
    <header class="navbar"> 
        <div class="nav-inner"> 
            <a class="brand" href="index.php"> 
                <img src="assets/img/logo.png" alt="Logo BKPSDM" class="brand-logo-img"> 
                <div> 
                    <strong>BIDANG MUTASI, PROMOSI, KEPANGKATAN, PENILAIAN KINERJA DAN DISIPLIN ASN</strong> 
                    <span>BKPSDM KABUPATEN KEPULAUAN ARU</span> 
                </div> 
            </a> 
            <button class="menu-toggle" onclick="document.querySelector('.nav-menu').classList.toggle('show')">☰</button> 
            <nav class="nav-menu"> 
                <a class="active" href="index.php">Beranda</a> 
                <div class="dropdown"> 
                    <button class="dropbtn">Layanan <span>⌅</span></button> 
                    <div class="dropdown-content"> 
                        <?php foreach ($menu as $nama => $url): ?> 
                            <a href="<?= htmlspecialchars($url) ?>"><?= htmlspecialchars($nama) ?></a> 
                        <?php endforeach; ?> 
                    </div> 
                </div> 
                <a href="kontak.php">Kontak</a> 
            </nav> 
        </div> 
    </header> 

    <!-- HERO SECTION --> 
    <section class="hero"> 
        <div class="hero-overlay"></div> 
        <div class="hero-content"> 
            <div class="eyebrow"> BIDANG MUTASI, PROMOSI, KEPANGKATAN, PENILAIAN KINERJA DAN DISIPLIN ASN </div> 
            <h1>ASN BERAKHLAK</h1> 
            <div> 
                <span class="hero-box-tag">BERSAMA ASN MEMBANGUN KABUPATEN KEPULAUAN ARU</span> 
            </div> 
        </div> 
    </section> 

    <!-- SERVICES SECTION --> 
    <section class="services"> 
        <div class="section-head"> 
            <span>Layanan Kepegawaian</span> 
            <h2>LAYANAN BIDANG MUTASI, PROMOSI, KEPANGKATAN, PENILAIAN KINERJA DAN DISIPLIN ASN</h2> 
            <p>Akses informasi layanan kepegawaian secara cepat, mudah, dan transparan.</p> 
        </div> 
        <div class="service-grid"> 
            <?php 
            $icons=["⚖","✓","❏","▷","★","↕","⇄","◆"]; 
            $i=0; 
            foreach($menu as $nama=>$url): 
            ?> 
                <a class="service-card" href="<?= htmlspecialchars($url) ?>"> 
                    <div class="icon"><?= $icons[$i++] ?></div> 
                    <h3><?= htmlspecialchars($nama) ?></h3> 
                    <span>Lihat layanan →</span> 
                </a> 
            <?php endforeach; ?> 
        </div> 
    </section> 

    <!-- SECTION TIM KERJA 15 PEGAWAI --> 
    <section class="team-section"> 
        <div class="team-header"> 
            <span>Sumber Daya Manusia</span> 
            <h2>Tim Kerja Bidang</h2> 
            <p>Aparatur Sipil Negara yang siap memberikan pelayanan kepegawaian terbaik dan profesional.</p> 
        </div> 
        <div class="team-grid"> 
            <?php foreach ($pegawai as $p): 
                $inisial = strtoupper(substr($p['nama'], 0, 1)); 
                $hasFoto = !empty($p['foto']) && file_exists($p['foto']); 
            ?> 
                <div class="team-card"> 
                    <?php if ($hasFoto): ?> 
                        <img src="<?= htmlspecialchars($p['foto']) ?>" alt="<?= htmlspecialchars($p['nama']) ?>" class="team-avatar-img"> 
                    <?php else: ?> 
                        <div class="team-avatar"><?= $inisial ?></div> 
                    <?php endif; ?> 
                    <span class="team-role"><?= htmlspecialchars($p['jabatan']) ?></span> 
                    <h4><?= htmlspecialchars($p['nama']) ?></h4> 
                    <p class="team-nip">NIP. <?= htmlspecialchars($p['nip']) ?></p> 
                </div> 
            <?php endforeach; ?> 
        </div> 
    </section> 

    <footer> 
        <div> 
            <strong>BIDANG MUTASI, PROMOSI, KEPANGKATAN, PENILAIAN KINERJA DAN DISIPLIN ASN Kabupaten Kepulauan Aru</strong><br> 
            <small>Dobo, Maluku</small> 
        </div> 
        <div>© <?= date("Y") ?> BIDANG MUTASI, PROMOSI, KEPANGKATAN, PENILAIAN KINERJA DAN DISIPLIN ASN Kabupaten Kepulauan Aru</div> 
    </footer> 
</body> 
</html>