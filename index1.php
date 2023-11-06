<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
      //loncat
			header("Location:tambah.php");
			exit;
		}else{
			$error=true;
		}
	}
	?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Penjawalan Lab UPT Komputer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/unipma.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a>info@uptkomputer@unipma.ac.id</a>
        <i class="bi bi-phone-fill phone-icon"></i> +62 813-3138-9761
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">SI PELUK</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Schedule</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto " href="#pricing">Prakerin</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="#team">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome to SI PELUK</h1>
      <h2>Universitas PGRI Madiun (UNIPMA)</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/prakerin-2.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>ABOUT US</h3>
            <br>
            <p class="fst-italic">
              Kami merupakan siswa-siswi dari SMKN 1 MEJAYAN kelas XII RPL (Rekayasa Perangkat Lunak) angkatan IX pada tahun 2021/2022. Saat ini sedang menjalankan prakerin di Universitas PGRI Madiun(UNIPMA), tepatnya di UPT Komputer. Prakerin kami dimulai pada tanggal 17 Juli 2023 sampai dengan 17 Desember 2023. Oleh 6 orang siswa-siswi, 2 laki-laki dan 4 perempuan.
            </p>
            <ul>
              <li><i></i>1. Afriza sebagai Project Manager</li>
              <li><i></i>2. Adifa sebagai Progammer</li>
              <li><i></i>3. Nabila sebagai System Analist</li>
              <li><i></i>4. Nopi sebagai Database</li>
              <li><i></i>5. Pika sebagai System Analist</li>
              <li><i></i>6. Yovita sebagai Desainer</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    

    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Schedule</span>
          <h2>Schedule</h2>
          <p>Jadwal penggunaan lab UPT Komputer </p>
        </div>

        <?php 
 require "funcion.php";
 $database = query('SELECT * FROM jadwal');
 
if(isset($_POST["keyword"])){
    $database=cari($_POST["keyword"]);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjadwalan Lab UPT Koumputer</title>
    <style>
    
        
        .data{
            position: relative;
            left: 48px;
        }
        .container table{
            margin: auto;
            width: 100%;
            min-height: 200px;
        }
        .mahok a{
            color: black;
        }.thead{
            background-color: black;
            color: white;
            width: 100%;
            min-height: 200px;
        }
        table th,
        table td{
          border: 1px solid #000000;
          padding: 7px 17px;
        }
    </style>
</head>
<body>


   
    <form action="" method="post">
        
    </form>
    </div>
    <br>
    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead class="thead">
                <tr>
                    <th>NO</th>
                    <th>PRODI</th>
                    <th>RUANG LAB</th>
                    <th>HARI</th>
                    <th>JAM MULAI</th>
                    <th>JAM SELESAI</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach($database as $dts) :?>
                 <tr>
                    <td><?php echo $i ?></td>
                <td><?php echo $dts["PRODI"] ?></td>
                <td><?php echo $dts["RUANG LAB"] ?></td>
                <td><?php echo $dts["HARI"] ?></td>
                <td><?php echo $dts["JAM MULAI"] ?></td>
                <td><?php echo $dts["JAM SELESAI"] ?></td>

                </tr>
          
                <?php $i++; ?>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Objective</h3>
          <p>Tujuan dari pembuatan web ini adalah membantu pihak UPT Komputer dalam pengelolaan jadwal penggunaan Lab UPT Komputer yang dapat memcatat dan menyimpan data jadwal penggunaan lab yang sudah digunakan.</p>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Portfolio</span>
          <h2>Portfolio</h2>
          <p>Beberapa Foto Ruangan Lab UPT komputer</p>
        </div>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/upt-lab.jpg" class="img-fluid" alt="">
            <div class="">
              <a href="assets/img/portfolio/upt-lab.jpg"><i></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/lab-upt.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/portfolio/lab-upt.jpg"><i></i></a>
              <a></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/lab1-1.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/portfolio/lab1-1.jpg"><i></i></a>
              <a></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/lab1-2.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/portfolio/lab1-2.jpg"><i></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/lab2-1.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/portfolio/lab2-1.jpg"><i></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/lab2-2.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/portfolio/lab2-2.jpg"></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/lab.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/portfolio/portfolio-7.jpg"></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/upt.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/portfolio/portfolio-8.jpg"><i></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/komputer.jpg" class="img-fluid" alt="">
            <div>
              <a><i></i></a>
              <a><i></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Prakerin</span>
          <h2>Prakerin</h2>
          <p>Beberapa Foto Prakerin di UPT Komputer</p>
        </div>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/kita.jpg" class="img-fluid" alt="">
            <div class="">
              <a href="assets/img/kita.jpg"><i></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/prakerin-1.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/prakerin-1.jpg"><i></i></a>
              <a></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/prakerin-5.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/prakerin-5.jpg"><i></i></a>
              <a></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/prakerin-4.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/prakerin-4.jpg"><i></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/prakerin-10.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/prakerin-6.jpg"><i></i></a>
              <a><i></i></a>
            </div>
          </div>
              
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/prakerin-3.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/portfolio/lab2-2.jpg"></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/prakerin-7.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/portfolio/portfolio-7.jpg"></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/prakerin-6.jpg" class="img-fluid" alt="">
            <div>
              <a href="assets/img/portfolio/portfolio-8.jpg"><i></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/prakerin-9.jpg" class="img-fluid" alt="">
            <div>
              <a><i></i></a>
              <a><i></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/prakerin-8.jpg" class="img-fluid" alt="">
            <div>
              <a><i></i></a>
              <a><i></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Hubungi kontak kami dibawah ini</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Address</h3>
              <p>Jl. Setia Budi No.85, Kanigoro, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63118</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>uptkomputer@unipma.ac.id</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call</h3>
              <p>+62 813-3138-9761</p>
            </div>
          </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.4552907880584!2d111.53941567501532!3d-7.6340868923816565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79be94b7511f73%3A0x863e1316e7a8da28!2sUniversitas%20PGRI%20Madiun!5e0!3m2!1sid!2sid!4v1697169229155!5m2!1sid!2sid" rameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

    </section><!-- End Contact Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>LOGIN</span>
          <h2>LOGIN</h2>
          <p>Pengisian data dilakukan oleh admin</p>
        </div>
      
	<style>
		
		.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}

.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
	box-shadow: 0px 0px 100px 4px #d6d6d6;
}

label{
	font-size: 11pt;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.tombol_login{
	background: #2aa7e2;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}

.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}
	</style>


<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		
	</div>



</div>  

    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>UPT KOMPUTER</h3>
              <p>
                Kampus 1 Lantai 3<br>
                Jl. Setia Budi No.85, Kanigoro, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63118<br><br>
                <strong>Phone:</strong> +62 813-3138-9761<br>
                <strong>Email:</strong> uptkomputer@unipma.ac.id<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Schedule</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#pricing">Prakerin</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Login</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Prakerin UPT Komputer 2023</span></strong>.  All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a>Nopi Duwi</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>