<?php
  include('assets/php/config.php');
$query=mysqli_query($con,"select * from tbpetisi");
$hitung=mysqli_num_rows($query);

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$status=1;
$query=mysqli_query($con,"insert into tbpetisi(nama_pet) values('$name')");
if($query)
{
  header("Refresh:0");
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Gertak-SITP - Gerbang Pengaduan Tindakan Korupsi di Direktorat SITP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/images/GG.png" rel="shortcut icon">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <style>
      .my-custom-scrollbar {
        position: relative;
        height: 200px;
        overflow: auto;
        }
      .table-wrapper-scroll-y {
        display: block;
        }
    </style>
<!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
  </head>

<body>


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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="index.php#services">Portal Lainnya</a></li>
                    <li class="has-sub">
                        <a href="javascript:void(0)">Dukung Kami!</a>
                        <ul class="sub-menu">
                            <li><a href="about-us.php">Ikuti Petisi</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php#contact-section">Lapor Sekarang!</a></li> 
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

  <section class="contact-us our-office2">
    <div class="left-info">
    <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h4>Berikan Dukungan Anda!</h4>
            <h6>Bergabunglah dengan</h6>
            <h4><em>
              <?php
              echo $hitung;
              ?>
            </em></h4>
            <h6>orang lainnya dalam mendukung Direktorat SITP </h6>
            <h6>sebagai Wilayah Bebas Korupsi!</h6>
              <div class="main-button-gradient">
                <div class ="scroll-to-section"><a href ="#get-infopetisi">Tekan untuk Mendukung</a></div>
              </div>
              <div class="main-button-gradient">
                <div class="scroll-to-section"><a href="#google-review">Berikan Google Review</a></div>
              </div>
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div id="carouselStandar" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/poster-3-br.png" class="d-block w-100" alt="gambar">
              </div>
              <div class="carousel-item">
                <img src="assets/images/sinergi.png" class="d-block w-100" alt="gambar">
              </div>
              <div class="carousel-item">
                <img src="assets/images/poster-1.png" class="d-block w-100" alt="gambar">
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
    </div>
  </section>

  <section class="contact-us our-office" id="get-infopetisi">
    <div class="left-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="assets/images/petisi-ani.gif" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h6>Dukung kami dengan</h6>
            <h4>Mengisi <em>Petisi </em>Berikut</h4>
          </div>
          <div class="col-lg-12 align-self-center">
            <div class="col-lg-12">
            <form id="contact" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <p>Dengan ini saya menyatakan mendukung Direktorat SITP sebagai Wilayah Bebas Korupsi.</p>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Masukkan Nama Anda" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-8">
                <fieldset>
                  <div class="main-button-gradient">
                    <div class="scroll-to-section"><a href="#google-review">Berikan Google Review</a></div>
                  </div>
                </fieldset>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <button type="submit" name="submit" class="main-button-gradient">Dukung!</button>
                </fieldset>
              </div>
          </div>
          </form>            
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="left-info">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">
            <div class="section-heading">
              <h6>Terima Kasih!</h6>
              <h4>kepada<em> Para Pendukung! </em> </h4>
            </div>
              <div class="table-wrapper-scroll-y my-custom-scrollbar">

                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th align = "center" scope="col">#</th>
                      <th align ="center" scope="col">Nama</th>
                    </tr>
                  </thead>
                  <?php
                    $nom = 1;
                    $data = mysqli_query($con, "SELECT * FROM tbpetisi");
                    while($d = mysqli_fetch_array($data)){
                  ?>
                  <tbody>
                    <tr>
                      <td align = "center"> <?php echo $nom++; ?></td>
                      <td align = "center"> <?php echo $d['nama_pet']; ?> </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>

              </div>
        </div>
      </div>
    </div>
  </div>
  </section>



  <section class="contact-us our-office" id="google-review">
    <div class="container">
      <div class="row">
          <div class="col-lg-4">
            <div class="left-info">
              <div class="section-heading">
                <h6>dan Jangan Lupa</h6>
                <h4>Beri kami penilaian pada <em>Google Review</em></h4>
                <p>Penilaian Anda akan sangat berarti bagi kemajuan organisasi kami.</>
              </div>
            </div>
          </div>
          <div class="col-lg-8"> 
            <div class="elfsight-app-f5917e6a-85d5-4c73-a345-305b42e635ec"></div>
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
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

</body>
</html>