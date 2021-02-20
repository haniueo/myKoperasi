<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>UAS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="https://twitter.com/haniiueo"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="https://instagram.com/haniueo"><i class="fa fa-instagram"></i></a></li>
                         <li> <a href="https://linkedin.co.id/hanifahcitra"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <p>myKoperasi | Web App Gratis untuk mengelola Koperasi </p>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/logomykoperasi3.png" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="active"> <a href="index.html">Home</a> </li>
                              <li> <a href="about.html">About</a> </li>
                              <li> <a href="fitur.html">Fitur</a> </li>
                              
                              <li> <a href="contact.html">Contact</a> </li>
                              <li class="mean-last"> <a href="user-registration.php">signup</a> </li>
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  <li><a class="buy" href="login.php">Login</a></li>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      <section class="slider_section">
         <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner11.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1> <br> <strong class="black_bold">my </strong><br>
                           <strong class="yellow_bold">Koperasi </strong></h1>
                        <p>Inovasi Pengelolaan Koperasi Digital <br>
                          Proses transaksi Koperasi kini jadi lebih mudah! </p>
                        <a  href="about.html"#">apa itu myKoperasi?</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner12.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>yuk <br> <strong class="black_bold">Daftar! </strong><br>
                           <strong class="yellow_bold">Sekarang </strong></h1>
                        <p>Mudah, Aman, dan Cepat<br>
                          signup - login - kelola Koperasimu! </p>
                        <a  href="user-registration.php"> Daftar Sekarang!see</a>
                     </div>
                  </div>
               </div>
               <!--<div class="carousel-item">
                  <img class="third-slide" src="images/banner2.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Our <br> <strong class="black_bold">Latest </strong><br>
                           <strong class="yellow_bold">Product </strong></h1>
                        <p>It is a long established fact that a r <br>
                          eader will be distracted by the readable content of a page </p>
                        <a  href="#">see more Products</a>
                     </div>
                  </div>
               </div>-->

            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="previous">
            <i class='fa fa-angle-left'></i>
            </a>
            
         </div>

      </section>



<!-- CHOOSE  -->
      <div class="whyschose">
         <div class="container">

            <div class="row">
               <div class="col-md-7 offset-md-3">
                  <div class="title">
                     <h2>Kenapa <strong class="black">my Koperasi?</strong></h2>
                     <span>Ga pake ribet kelola Koperasimu!</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="choose_bg">
         <div class="container">
            <div class="white_bg">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/easy.png"/></i>
                     <h3>Mudah</h3>
                     <p>Lakukan proses transaksi Dimana pun, Kapan pun, secara Realtime</p>
                  </div>
               </div>
               <div> class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/safe.png"/></i>
                     <h3>Aman</h3>
                     <p>Tidak perlu khawatir data Koperasi akan Hilang, atau Rusak</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/fast.png"/></i>
                     <h3>Cepat</h3>
                     <p>Menghemat Waktu dan Tenaga dalam melakukan proses transaksi</p>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="for_box">
                     <i><img src="icon/done.png"/></i>
                     <h3>Ringkas</h3>
                     <p>Tidak perlu pusing dengan banyaknya arsip, karena ketersedian database yang cukup besar</p>
                  </div>
               </dir>
               <div class="col-md-12">
                  <a class="read-more">Yuk Login!</a>
               </div>
            </div>
         </div>
       </div>
      </div>
<!-- end CHOOSE -->

      <!-- service --> 
      <div class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Proses <strong class="black">Pelayanan</strong></h2>
                     <span>Cara mudah untuk mengelola Koperasimu!</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service1.png"/></i>
                     <h3>Pelayanan Cepat</h3>
                     <p>Tidak perlu datang ke Koperasi</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service2.png"/></i>
                     <h3>Keamanan Data</h3>
                     <p>Jangan takut data kamu hilang</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service3.png"/></i>
                     <h3>Tim Berpengalaman</h3>
                     <p>Tim yang sudah teredukasi</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service4.png"/></i>
                     <h3>Biaya Terjangkau</h3>
                     <p>Tidak perlu banyak biaya untuk jangka panjang</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service5.png"/></i>
                     <h3>Transparansi Keuangan</h3>
                     <p>Proses transaksi keuangan yang aksesible oleh pengguna</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service6.png"/></i>
                     <h3>Terpercaya</h3>
                     <p>Penyedia jasa yang legal dan sudah terpercaya keamanannya</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->

      <!-- our product -->
      <div class="product">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Fitur <strong class="black">my Koperasi</strong></h2>
                     <span>Tersedia berbagai macam fitur untuk pengelolaan Koperasi</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-bg">
         <div class="product-bg-white">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i ><img src="icon/s1.png"/></i>
                     <h3>  Simpanan</h3>
                     <span> <a href="index.html">Anggota Koperasi</a></span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i> <img src="icon/s1.png"/></i>
                     <h3>Pinjaman</h3>
                     <span>Anggota Koperasi</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/s1.png"/></i>
                     <h3>Angsuran</h3>
                     <span>Anggota Koperasi</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/s1.png"/></i>
                     <h3>Sisa Hasil Usaha</h3>
                     <span>Anggota Koperasi</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/s5.png"/></i>
                     <h3>Cek</h3>
                     <span><a href="data.php">Anggota</a></span>
                  </div>
               </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/s6.png"/></i>
                     <h3>Cek</h3>
                     <span>Traffic Keuangan</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/s7.png"/></i>
                     <h3>Cek</h3>
                     <span>Pengajuan</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/s8.png"/></i>
                     <h3>Cek</h3>
                     <span>Laporan</span>
                  </div>
               </div>
              
              
              
               
               </div>
            </div>
         </div>
         <div class="Clients_bg_white">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title">
                        <h3>Review Klien kami</h3>
                     </div>
                  </div>
               </div>
               <div id="client_slider" class="carousel slide banner_Client" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#client_slider" data-slide-to="0" class="active"></li>
          <li data-target="#client_slider" data-slide-to="1"></li>
          <li data-target="#client_slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption text-bg">
               <div class="img_bg">
                  <i><img src="images/lllll.png"/><span>Jekk | Koperasi ManDur<br><strong class="date">12/02/2019</strong></span></i>
                  
               </div>
                
                <p>Demiapazii Web aplikasinya keren banget, jadi Gue ga ribet deh harus pake buku kas koperasi. Simpel, ga kebanyakan arsip IMPRESSIVE!</p>
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-bg">
                <div class="img_bg">
                  <i><img src="images/lllll.png"/><span>Binwood | Koperasi Makmoer<br><strong class="date">12/02/2019</strong></span></i>
                  
               </div>
                <p>Mantap ada inovasi Koperasi Digital kaya gini, jadi ga was was kalo ketemu orang banyak pas ngelakuin transaksi di jaman pandemi gini. </p>
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-bg">
                 <div class="img_bg">
                  <i><img src="images/lllll.png"/><span>Stardust | Koperasi Berkah<br><strong class="date">12/02/2019</strong></span></i>
                  
               </div>
                <p>That was really goodjob! Bener bener se worth it itu guys, ga perlu pusing naroh data Koperasi dimana, ngatur segala macem yah tinggal buka web aja. </p>
               
              </div>
            </div>
          </div>
        </div>
        
      </div>

            </div>
         </div>

         <div class="container">
            <div class="yellow_bg">
            <div class="row">
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                  <div class="yellow-box">
                     <h3>Daftarkan Koperasimu!<i><img src="images/logomykoperasi4.png"/></i></h3>
                     
                     <p>Dapatkan kemudahan untuk setiap transaksimu</p>
                  </div>
               </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                  <div class="yellow-box">
                     <a href="#">Sign Up</a>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </div>

      <!-- end our product -->
      <!-- map -->
      <div class="container-fluid padi">
         <div class="map">
            <img src="images/mapimg.png" alt="img"/>
         </div>
      </div>
      <!-- end map --> 
      <!--  footer --> 




      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <ul class="sociel">
                         <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                         <li> <a href="https://twitter.com/haniiueo"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="https://instagram.com/haniueo"><i class="fa fa-instagram"></i></a></li>
                        
                     </ul>
                  </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>contact us</h3>
                     <span>Jl.Gunungsari 6 No.66<br>
                       Surabaya, Indonesia<br>
                        +666</span>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>ADDITIONAL LINKS</h3>
                     <ul class="lik">
                         <li> <a href="#">About us</a></li>
                         <li> <a href="#">Terms and conditions</a></li>
                         <li> <a href="#">Privacy policy</a></li>
                         <li> <a href="#">News</a></li>
                          <li> <a href="#">Contact us</a></li>
                     </ul>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>service</h3>
                      <ul class="lik">
                    <li> <a href="#">Simpanan</a></li>
                         <li> <a href="#">Pinjaman</a></li>
                         <li> <a href="#">Angsuran</a></li>
                         <li> <a href="#">Sisa Hasil Usaha</a></li>
                         <li> <a href="#">Cek data anggota</a></li>
                          <li> <a href="#">Cek traffic</a></li>
                          <li> <a href="#">Cek pengajuan</a></li>
                          <li> <a href="#">Cek laporan</a></li>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>my Koperasi</h3>
                     <span>Koperasi Digital <br>Mudah, Aman, dan Cepat!
                  </div>
               </div>
            </div>
         </div>
            <div class="copyright">
               <p>Copyright <a href="https://index.html"> myKoperasi</a></p>
            </div>
         
      </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>