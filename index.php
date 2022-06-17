<?php
  include('assets/php/config.php');
$msg="";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$date=$_POST['date'];
$message=$_POST['message'];
$status=1;
$query=mysqli_query($con,"insert into tblapor(nama,tgl_lap,uraian) values('$name','$date','$message')");
if($query)
{
$msg="Laporan Anda Kami terima.";
}
else{
$error="Terjadi kesalahan. Coba lagi.";    
} 
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>E-Port - Easy Way To Report</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/images/GG.png" rel="shortcut icon">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script>
      $(document).ready(function(){
        $("#myModal").modal('show');
      });
    </script>
<!--

TemplateMo 573 EduWell
 
https://templatemo.com/tm-573-eduwell

-->
  </head>

<body>

<div class="modal show bd-example-modal-lg" id="exampleModal2" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded border-0 modal-lg" role="document">
      <div class="modal-content rounded border-0">
        <div class="modal-header header-popup">
          <h5 class="modal-title title-popup" id="exampleModalLabel">Dukung Direktorat SITP</h5>
          <button type="button" class="close white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="carouselStandar" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/images/poster-3-br.png" class="d-block w-100" alt="gambar">
                </div>
                <div class="carousel-item">
                  <img src="assets/images/poster-4.gif" class="d-block w-100" alt="gambar">
                </div>
                <div class="carousel-item">
                  <img src="assets/images/sinergi.png" class="d-block w-100" alt="gambar">
                </div>
              </div>
          </div>
              
        </div>
        <div class="row d-flex flex-row justify-content-between modal-footer col-md-12">
        <div class="col-md-4">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> </div>
            <div class="col-md-6 text-md-right">
                <button class="main-button-gradient" style="border: none !important; background-color:none !important"><a href="about-us.php#get-infopetisi" >
                    Tekan disini untuk mendukung! &nbsp;
                </a></button>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                          <img src="assets/images/logo-baru.png" alt="EduWell Template">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#services">Portal Lainnya</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Dukung Kami!</a>
                              <ul class="sub-menu">
                                  <li><a href="about-us.php">Ikuti Petisi</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#contact-section">Lapor Sekarang!</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->

  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Selamat Datang di E-Port (Easy Way to Report) Direktorat SITP.</h6>
            <h2>Laporkan jika Anda menemukan <em>PELANGGARAN</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">Lapor Sekarang!</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/home-right.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>..................</h6>
            <h4>Apa Saja yang Bisa <em>DILAPORKAN?</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <h4>Kerugian Keuangan Negara</h4>
                <p>Misal: Anda menemukan pegawai yang menggunakan anggaran tidak sesuai peruntukannya.</p>
            </div>
            <div class="item">
              <h4>Penyuapan</h4>
                <p>Misal: Anda menemukan pejabat yang menerima suap dalam rangka melancarkan sebuah kegiatan.</p>
            </div>
            <div class="item">
              <h4>Penggelapan dalam Jabatan</h4>
                <p>Misal: Anda menemukan pejabat yang menyalahgunakan wewenangnya untuk keuntungan pribadi.</p>
            </div>
            <div class="item">
              <h4>Pemerasan</h4>
                <p>Misal: Anda dipaksa untuk membayar sejumlah uang untuk mendapatkan layanan di Dit SITP.</p>
            </div>
            <div class="item">
              <h4>Gratifikasi</h4>
                <p>Anda menemukan pegawai yang menerima hadiah selain upah terkait pekerjaannya.</p>
            </div>
            <div class="item">
              <h4>Konflik Kepentingan</h4>
                <p>Misal: Anda menemukan adanya ketidakadilan dalam pemilihan vendor dimana pemenang memiliki hubungan dengan pegawai.</p>
            </div>
            <div class="item">
              <h4>Perbuatan Curang</h4>
                <p>Misal: Anda menemukan pegawai yang menyerobot barang milik negara yang merugikan orang lain.</p>
            </div>
            <div class="item">
              <h4>Pelanggaran Kode Etik</h4>
                <p>Misal: Anda menemukan pegawai yang melanggar kode etik dan/atau nilai-nilai seorang ASN.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4>Portal Resmi <em>Lainnya</em></h4>
            <h6>Laporkan Kecurangan melalui Portal Resmi Lain Kemenkeu</h6>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <a href="https://pengaduandjpb.kemenkeu.go.id/">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/SIPANDU.png" alt="">
                </div>
                <h4>SiPandu</h4>
                <p>SiPandu adalah sarana Whistle Blowing resmi milik DJPb yang dapat anda gunakan untuk melaporkan kecurangan di lingkungan DJPB</p>
              </div>
            </div>
            </a>
            <div class="item">
              <a href="https://www.wise.kemenkeu.go.id/#/">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/WISE.png" alt="">
                </div>
                <h4>Wise Kemenkeu</h4>
                <p>Wise Kemenkeu adalah aplikasi yang disediakan Kementerian Keuangan untuk melaporkan kecurangan.</p>
              </div>
              </a>
            </div>
            <div class="item">
              <a href="https://api.whatsapp.com/send/?phone=6289638686929&text&app_absent=0">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/WA.png" alt="">
                </div>
                <h4>Hubungi Pejabat Direktorat SITP</h4>
                <p>Gertak-SITP menyediakan layanan direct message pengaduan menuju WhatsApp pejabat Direktorat SITP</p>
              </div>
              </a>
            </div>
            <div class="item">
              <a href="https://mail.google.com/mail/u/0/?tf=cm&fs=1&to=lapor.sitp@gmail.com">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/MAILING.png" alt="">
                </div>
                <h4>Lapor via Surel</h4>
                <p>Gertak-SITP menyediakan alamat surel bagi anda yang ingin melapor melalui surel. Identitas anda dijaga kerahasiaannya.</p>
              </div>
              </a>
            </div>
            <div class="item">
              <a href="hai.kemenkeu.go.id">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/hai-1.png" alt="">
                </div>
                <h4>Live Chat Hai DJPb</h4>
                <p>Hai DJPb akan menjawab setiap keluhan anda dengan ramah, profesional, dan berintegritas.</p>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    
      <img src ="assets/images/slide-poster.png">
    
  </section>



  <section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="map">
          
            <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.722001559903!2d106.83608451430969!3d-6.167968962162425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5c8f92ee891%3A0xa095f8c98f67a990!2sDirektorat%20SITP%20(Sistem%20Informasi%20%26%20Teknologi%20Perbendaharaan)!5e0!3m2!1sen!2sid!4v1650263443629!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="row">
              <div class="col-lg-4 offset-lg-1">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Telepon</h4>
                  <span>14090</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <form id="contact" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Jika anda menemukan kejadian yang memiliki indikasi korupsi,</h6>
                  <h4>SEGERA <em>LAPOR</em></h4>
                  <p>Kami berkomitmen untuk menjaga kerahasian data pribadi anda dan menindaklanjuti setiap laporan yang anda berikan.</p>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Nama (Boleh Samaran)" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="date" name="date" id="date" placeholder="Tanggal Peristiwa" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Uraian Kejadian"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" name="submit" class="main-button-gradient">Kirim Laporan</button>
                </fieldset>
              </div>
            </div>
            <?php if($msg){ ?>
              <div class="alert alert-success" role="alert">
              <strong>Oke. </strong> <?php echo htmlentities($msg);?>
              </div>
            <?php } ?>
          </form>
        </div>

        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="https://www.facebook.com/hai.djpb"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/haidjpb?lang=en"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://instagram.com/hai.djpb"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 OJT Direktorat Sistem Informasi dan Teknologi Perbendaharaan. 
          <br>Dibuat berdasarkan template dari: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
          $("#exampleModal2").modal('show');
        });
    </script>
    <script src="assets/js/owl-carousel.js"></script>
</body>

</html>