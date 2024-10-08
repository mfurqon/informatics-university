<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatics University</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/30e4c5624e.js" crossorigin="anonymous"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo"><span>Informatics </span>University</a>

        <div class="navbar-nav">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang Kami</a>
            <a href="#visi-misi">Visi & Misi</a>
            <a href="#fakultas">Fakultas</a>
            <a href="#fasilitas">Fasilitas</a>
            <a href="#contact">Kontak</a>
            <a href="php/logout.php">Logout</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Ayo Daftar <span>Sekarang</span></h1>
            <p>
            Dapatkan pendidikan unggulan di universitas kami. Daftarkan dirimu sekarang untuk memulai perjalanan akademikmu.
            </p>
            <a href="php/form_daftar.php" class="cta">Daftar Sekarang</a>
            
        </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="img/gambar_wisuda.jpeg" alt="Tentang Kami">
            </div>
            
            <div class="content">
                <h3>Kenapa memilih universitas kami?</h3>
                <p>
                    Dengan fakultas terkemuka dan kurikulum yang relevan, kami memberikan pengalaman belajar yang tidak hanya mendidik, tetapi juga mempersiapkan untuk dunia kerja.
                </p>
                <p>
                    Mahasiswa kami tidak belajar mengenai teori saja, tetapi juga mendapatkan pengalaman praktis seru dan bermanfaat
                </p>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Visi Misi Start -->
    <section id="visi-misi" class="visi-misi">
        <h2>Visi <span>Misi</span></h2>

        <div class="row">
            <div class="visi-misi-img">
                <img src="img/fakultas/gambar_sarjana_ilkom.png" alt="Gambar Ilmu Komputer" title="Gambar Ilmu Komputer">
            </div>
            
            <div class="content">
                <h3>
                    Visi
                </h3>
                <p>
                    Menjadi universitas unggul di bidang ekonomi kreatif pada tahun 2033.
                </p>
                <h3>
                    Misi
                </h3>
                <ol>
                    <li>
                        Menyelenggarakan program pendidikan akademik dan vokasi yang mendukung ekonomi kreatif.
                    </li>
                    <li>
                        Menyelenggarakan penelitian berkualitas.
                    </li>
                    <li>
                        Menyelenggarakan pengabdian masyarakat dalam rangka meningkatkan kualitas sumber daya manusia.
                    </li>
                    <li>
                        Mengelola universitas secara mandiri dengan tata kelola yang baik melalui pengembangan kelembagaan yang berorientasi pada mutu.
                    </li>
                    <li>
                        Memperluas jejaring kerjasama dengan pemerintah, dunia industry dan usaha baik di dalam negeri dan luar negeri.
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <!-- Visi Misi End -->

    <!-- Fakultas Section start -->
    <section id="fakultas" class="fakultas">
        <h2><span>Fakultas</span></h2>

        <p>
            Fakultas & Program Studi kami telah terakreditasi dan teruji di dunia kerja.
        </p>

        <div class="row">
            <div class="fakultas-card">
                <img src="img/fakultas/gambar_ilmu_komputer4.jpg" alt="Ilmu Komputer" class="fakultas-card-image">
                <h3 class="fakultas-card-title">
                </h3>
                <a href="php/fakultas_login.php" class="cta">Info Selengkapnya</a>
            </div>
        </div>
    </section>
    <!-- Fakultas Section End -->

    <!--Fasilitas Section start -->
    <section id="fasilitas" class="fasilitas">
        <h2><span>Fasilitas</span></h2>
        <div class="container">
            <div class="content-slide">
                <div class="imgslide fade">
                    <div class="numberslide">1 / 5</div>
                    <img src="img/fakultas/gambar_kelas.jpg" alt="">
                    <div class="text">Ruang Kelas</div>
                </div>
    
                <div class="imgslide fade">
                    <div class="numberslide">2 / 5</div>
                    <img src="img/fakultas/lab_komputer.jpg" alt="">
                    <div class="text">Laboratorium Komputer</div>
                </div>
    
                <div class="imgslide fade">
                    <div class="numberslide">3 / 5</div>
                    <img src="img/fakultas/gambar_perpustakaan.jpg" alt="">
                    <div class="text">Ruang Perpustakaan</div>
                </div>

                <div class="imgslide fade">
                    <div class="numberslide">4 / 5</div>
                    <img src="img/fakultas/aula_kampus.jpg" alt="">
                    <div class="text">Aula</div>
                </div>

                <div class="imgslide fade">
                    <div class="numberslide">5 / 5</div>
                    <img src="img/fakultas/kantin_kampus.jpg" alt="">
                    <div class="text">Kantin</div>
                </div>

                <a class="prev" onClick="nextslide(-1)">&#10094;</a>
                <a class="next" onClick="nextslide(1)">&#10095;</a> 
            </div>
    
            <div class="page">
                <span class="dot" onClick="dotslide(1)"></span>
                <span class="dot" onClick="dotslide(2)"></span>
                <span class="dot" onClick="dotslide(3)"></span>
                <span class="dot" onClick="dotslide(4)"></span>
                <span class="dot" onClick="dotslide(5)"></span>
            </div>
    
        </div>
    
        <script>
            var slideIndex = 1;
                showSlide(slideIndex);
    
            function nextslide(n){
                showSlide(slideIndex += n);
            }
    
            function dotslide(n){
                showSlide(slideIndex = n);
            }
    
            function showSlide(n) {
                var i;
                var slides = document.getElementsByClassName("imgslide");
                var dot = document.getElementsByClassName("dot");
                
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length;
                }
                for (i = 0; i < slides.length; i++) {
                    
                    slides[i].style.display = "none";
                }
    
                for (i = 0; i < slides.length; i++) {
                    
                    dot[i].className = dot[i].className.replace(" active", "");
                }
    
                slides[slideIndex - 1].style.display = "block";
    
                dot[slideIndex - 1].className += " active";
                
            }
        </script>
    
    </section>
    <!--Fasilitas Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>

        <p>
            Jika anda ingin menanyakan sesuatu tentang universitas kami, jangan ragu-ragu untuk menghubungi kami
        </p>

        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.65638989117!2d106.66470135564089!3d-6.229379587641058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1701886772111!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>


            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama" required>
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="email" placeholder="email" required>
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="number" placeholder="no hp" required>
                </div>
                <div class="input-group">
                    <i data-feather="message-square"></i>
                    <input type="text" placeholder="pesan" required>
                </div>
                <button type="submit" class="btn">kirim pesan</button>
            </form>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
            <a href="#"><i data-feather="youtube"></i></a>
        </div>

        <div class="links">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang Kami</a>
            <a href="#visi-misi">Visi & Misi</a>
            <a href="#fakultas">Fakultas</a>
            <a href="#fasilitas">Fasilitas</a>
            <a href="#contact">Kontak</a>
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

    <!-- My Javascript For Hamburger Menu -->
    <script src="js/script.js"></script>
</body>
</html>
