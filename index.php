<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Portofolio - Alni Syarifah</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        /* HEADER IMAGE */
        .header img {
            width: 100%;
            height: auto;
            display: block;
        }

        
        nav {
            background-color: #2c3e50;
            display: flex;
            justify-content: center;
            gap: 15px;
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        nav a:hover {
            background-color: #3498db;
        }

        .section-content {
            padding: 40px 30px;
            min-height: 400px;
            border-bottom: 1px solid #eee;
        }

        .section-content h2 {
            margin-bottom: 15px;
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            display: inline-block;
            padding-bottom: 5px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .gallery-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        .gallery-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
        }

        .gallery-card p {
            padding: 10px;
            font-size: 14px;
            font-weight: 500;
            color: #555;
        }

        /* FOOTER IMAGE */
        .footer img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- HEADER IMAGE -->
    <header class="header">
        <img src="images/header.jpg.jpg" alt="Header Banner">
    </header>

    <nav>
        <a href="#beranda">Beranda</a>
        <a href="#cv">CV</a>
        <a href="#kerja">Portofolio</a>
        <a href="#foto">Galeri</a>
    </nav>

    <!-- 1. KONTEN BERANDA -->
    <section id="beranda" class="section-content">
        <div style="display: flex; align-items: center; gap: 30px; flex-wrap: wrap;">
            
           
            
           
            <div style="flex: 2; min-width: 280px;">
                <h2 style="border-bottom: none; padding-bottom: 0; margin-bottom: 10px;">Halo, Selamat Datang! 👋</h2>
                <p style="font-size: 16px; line-height: 1.6; color: #555; margin-bottom: 20px;">
                    Saya <strong>Alni Syarifah</strong>, mahasiswi Teknik Informatika di STMIK DCI. Website portofolio pribadi ini berisi informasi mengenai CV, daftar proyek portofolio, serta galeri kegiatan saya. Silakan gulir ke bawah untuk mengeksplorasi lebih lanjut!
                </p>
            
                <div style="display: flex; gap: 10px;">
                    <a href="#cv" style="background-color: #3498db; color: white; padding: 8px 18px; border-radius: 5px; text-decoration: none; font-weight: 600; font-size: 14px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">Lihat CV</a>
                    <a href="#kerja" style="background-color: #2c3e50; color: white; padding: 8px 18px; border-radius: 5px; text-decoration: none; font-weight: 600; font-size: 14px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">Lihat Portofolio</a>
                </div>
            </div>
        </div>
    </section>

  
    <section id="cv" class="section-content">
        <h2>Curriculum Vitae</h2>
        
       
        <div style="margin-bottom: 25px;">
            <p style="font-size: 16px; line-height: 1.6; color: #555;">
                Halo! Saya adalah seorang mahasiswi tingkat awal di bidang teknologi yang memiliki ketertarikan besar pada pengembangan web, pemrograman, serta desain grafis. 
                Berpengalaman dalam praktik kerja industri telekomunikasi serta pembuatan sistem aplikasi berbasis web.
            </p>
        </div>

        <!-- Bagian Data Diri -->
        <h3 style="color: #2c3e50; font-size: 18px; margin-bottom: 10px; border-bottom: 2px solid #3498db; display: inline-block; padding-bottom: 3px;">Data Diri</h3>
        <table style="width: 100%; margin-bottom: 25px; border-collapse: collapse;">
            <tr>
                <td style="padding: 8px 0; width: 30%; font-weight: 600; color: #333;">Nama Lengkap</td>
                <td style="padding: 8px 0; color: #555;">: Alni Syarifah</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; font-weight: 600; color: #333;">Tempat, Tanggal Lahir</td>
                <td style="padding: 8px 0; color: #555;">: Tasikmalaya, 7 Desember 2006</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; font-weight: 600; color: #333;">Jenis Kelamin</td>
                <td style="padding: 8px 0; color: #555;">: Perempuan</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; font-weight: 600; color: #333;">Status</td>
                <td style="padding: 8px 0; color: #555;">: Mahasiswi</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; font-weight: 600; color: #333;">Email</td>
                <td style="padding: 8px 0; color: #555;">: alnisyarifah071226@gmail.com</td>
            </tr>
        </table>

      
        <h3 style="color: #2c3e50; font-size: 18px; margin-bottom: 10px; border-bottom: 2px solid #3498db; display: inline-block; padding-bottom: 3px;">Riwayat Pendidikan</h3>
        <ul style="margin-bottom: 25px; padding-left: 20px; line-height: 1.8; color: #555;">
            <li><strong>STMIK DCI</strong> — S1 Teknik Informatika (Semester 3)</li>
            <li><strong>Sekolah Menengah Kejuruan (SMK)</strong> — Jurusan Rekayasa Perangkat Lunak / IT (Fokus Pemrograman PHP, HTML, CSS, & Database)</li>
            <li><strong>MTS Alhasanah 3</strong></li>
            <li><strong>MIs Nurul Huda</strong></li>
            <li><strong>RA Al-Ummah</strong></li>
        </ul>

    
        <h3 style="color: #2c3e50; font-size: 18px; margin-bottom: 10px; border-bottom: 2px solid #3498db; display: inline-block; padding-bottom: 3px;">Pengalaman & Keahlian</h3>
        <ul style="padding-left: 20px; line-height: 1.8; color: #555;">
            <li><strong>Praktik Kerja Lapangan (PKL):</strong> Pernah membuat aplikasi berbasis website.</li>
            <li><strong>Keahlian Teknis:</strong> HTML, CSS, PHP, MySQL, phpMyAdmin, XAMPP, Git & GitHub, Turbo Pascal, Laravel.</li>
            <li><strong>Desain & Pendukung:</strong> Canva (Desain Presentasi & UI/UX), Microsoft Excel 2021.</li>
        </ul>
    </section>

    
    <section id="kerja" class="section-content">
        <h2>Portofolio Pekerjaan / Proyek</h2>
        <ul style="padding-left: 20px; line-height: 1.8; color: #555;">
            <li><strong>Proyek 1:</strong> Website Perpustakaan</li>
            <li><strong>Proyek 2:</strong> App Mobile Jurnal Daily</li>
            <li><strong>Proyek 3:</strong> Website Pendaftaran Siswa</li>
            <li><strong>Proyek 4:</strong> Mengelola Microsoft Word</li>
            <li><strong>Proyek 5:</strong> Portofolio Digital</li>
        </ul>
    </section>

    
    <section id="foto" class="section-content">
        <h2>Galeri Foto</h2>
        <div class="gallery-grid">
            <div class="gallery-card">
                <img src="images/foto1.jpg" alt="Foto1">
                <p>Website Perpustakaan</p>
            </div>
            <div class="gallery-card">
                <img src="images/foto2.jpg" alt="Foto2">
                <p>Praktik Kerja Lapangan</p>
            </div>
            <div class="gallery-card">
                <img src="images/foto3.jpg" alt="Foto3">
                <p>Pembuatan Website Pendaftaran</p>
            </div>
            <div class="gallery-card">
                <img src="images/foto4.jpg" alt="Foto4">
                <p>Proyek App Mobile</p>
            </div>
            <div class="gallery-card">
                <img src="images/foto5.jpg" alt="Foto5">
                <p>Kegiatan Organisasi Eksternal</p>
            </div>
            <div class="gallery-card">
                <img src="images/foto6.jpg" alt="Foto6">
                <p>Proyek Mengelola Microsoft Word</p>
            </div>
        </div>
    </section>

    <!-- FOOTER IMAGE -->
    <footer class="footer">
        <img src="images/footer.jpg.jpg" alt="Footer Banner">
    </footer>
</div>

</body>
</html>