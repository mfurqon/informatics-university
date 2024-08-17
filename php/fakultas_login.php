<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: fakultas.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultas</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo"><span>Informatics </span>University</a>

        <div class="navbar-nav">
            <a href="../index_login.php">Beranda</a>
            <a href="#container-fakultas">Fakultas</a>
            <a href="#ukm">UKM</a>
            <a href="logout.php">Logout</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <section id="container-fakultas" class="container-fakultas">

        <div class="container-fakultas">
            <h2>Fakultas & Program Studi</h2>
            
            <div class="row">
                <div class="fakultas-img">
                    <img src="../img/fakultas/gambar_ilmu_komputer.jpeg" alt="Ilmu Komputer">
                </div>

                <div class="content">
                    <p>Fakultas & Program Studi kami menawarkan kurikulum yang terbaik untuk membentuk pemimpin masa depan bangsa. Reputasi Fakultas & Program Studi kami sebagai reputasi yang terbaik dan telah teruji</p>
                </div>
            </div>
            
            <div class="main-fakultas">
                
                <div class="list-prodi">
                    <h2>Teknik & Informatika</h2>
                    <ul>
                        <li>Sistem Informasi</li>
                        <li>Teknologi Informasi</li>
                        <li>Rekayasa Perangkat Lunak</li>
                        <li>Ilmu Komputer</li>
                        <li>Teknik Industri</li>
                        <li>Teknik Elektro</li>
                    </ul>
                </div>
            
                <div class="list-prodi">
                    <h2>Komunikasi & Bahasa</h2>
                    <ul class="prodi">
                        <li>Ilmu Komunikasi</li>
                        <li>Sastra Inggris</li>
                        <li>Sastra Indonesia</li>
                        <li>Sastra Jepang</li>
                        <li>Sastra Korea</li>
                    </ul>
                </div>
                
                <div class="list-prodi">
                    <h2>Ekonomi & Bisnis</h2>
                    <ul>
                        <li>Bisnis Digital</li>
                        <li>Manajemen</li>
                        <li>Akuntansi</li>
                        <li>Ekonomi Syariah</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="ukm" class="container-ukm">
        <div class="container-ukm">
            <h2>UKM</h2>
            <div class="row">
                <div class="ukm-img">
                    <img src="../img/fakultas/unit_kegiatan_mahasiswa.webp" alt="">
                </div>
                
                <div class="detail-ukm">

                    <div class="content">
                        <h3>Unit Kegiatan Mahasiswa</h3>
                        <p>Kami juga mempunyai Unit Kegiatan Mahasiswa agar mahasiswa dapat mengeksplorasi lebih dalam lagi mengenai bakat-bakat mereka</p>
                    </div>
                    
                    <div class="main-ukm">
                        <h3>Daftar UKM</h3>
                        <ul class="list-ukm">
                            <li>Badminton</li>
                            <li>Futsal</li>
                            <li>Basket</li>
                            <li>Voli</li>
                            <li>Silat</li>
                            <li>Musik</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <footer class="footer-fakultas" id="footer-fakultas">
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
            <a href="#"><i data-feather="youtube"></i></a>
        </div>

        <div class="links">
            <a href="../index_login.php">Beranda</a>
            <a href="../index_login.php#about">Tentang Kami</a>
            <a href="../index_login.php#visi-misi">Visi & Misi</a>
            <a href="#">Fakultas</a>
            <a href="../index_login.php#fasilitas">Fasilitas</a>
            <a href="../index_login.php#contact">Kontak</a>
        </div>

        <div class="credit">
            <p>Created by <a href="">Kelompok 2</a>. | &copy; 2023.</p>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>

    <!-- Javascript -->
    <script src="../js/script.js"></script>
</body>
</html>