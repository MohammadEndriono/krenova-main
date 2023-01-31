<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="materialize is a responsive creative agency template">
        <meta name="keywords" content="material, material design, material design, card style, material template, portfolio, corporate, business, creative, agency">
        <meta name="author" content="trendytheme.net">

        <title>Pendaftaran Krenova</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="assets/img/ico/logo.png">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">

        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Material Icons CSS -->
        <link href="assets/fonts/iconfont/material-icons.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="assets/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!-- flexslider -->
        <link href="assets/flexSlider/flexslider.css" rel="stylesheet">
        <!-- materialize -->
        <link href="assets/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- shortcodes -->
        <link href="assets/css/shortcodes/shortcodes.css" rel="stylesheet">
        <!-- Main Style CSS -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- Creative CSS -->
        <link href="assets/css/skins/creative.css" rel="stylesheet">
        <!-- Alert CSS -->
        <link href="assets/css/shortcodes/alert.css" rel="stylesheet">
        

    </head>
    <body id="top" class="has-header-search">

<!------------------------------------------------------CONTENT START-------------------------------------------------------------->

<!--header start-->
<header id="header" class="tt-nav nav-border-bottom">
    <div class="banner-1 header-sticky light-header">
        <div class="container">
        <div class="search-wrapper">
            <div class="search-trigger pull-right">
                <div class='search-btn'></div>
                <i class="material-icons">&#xE7FD;</i>
            </div>

            <!-- Modal Search Form -->
            <i class="search-close material-icons">&#xE5CD;</i>
            <div class="search-form-wrapper">
              <form action="<?php echo e(url('logout')); ?>" class="white-form">
                <div class="text-center">
                  <a href="<?php echo e(url('logout')); ?>"class="waves-effect waves-light btn red"><i class="material-icons left">&#xE899;</i> LOG OUT</a>
                </div>
              </form>
            </div>
        </div><!-- /.search-wrapper -->
                                        
            <div id="materialize-menu" class="menuzord">
            <!--logo start-->
                <a href="<?php echo e(url('/pengguna')); ?>" class="logo-brand">
                    <img class="retina" src="assets/img/logo2.png" alt=""/>
                </a>
            <!--logo end-->  
            
            <!-- menu start-->
            <ul class="menuzord-menu pull-right">
              <li><a href="<?php echo e(url('/pengguna')); ?>">Beranda</a></li>
              <li><a href="<?php echo e(url('/informasi')); ?>">Informasi</a>
              </li>
              <li><a href="<?php echo e(url('/galeri')); ?>">Galeri</a>
              </li>
              <li   class="active"><a href="<?php echo e(url('/pendaftaran')); ?>">Pendaftaran</a></li>
            </ul>
                <!-- menu end-->
            </div>
        </div>
    </div>
</header>
<!--header end-->

<!--page title start-->
        <section class="page-title parallax-bg page-title-bg-2 overlay dark-5 ptb-190" data-stellar-background-ratio="0.5">
            <div class="container">
            </div>
        </section>
<!--page title end-->

 <!--Form Input Start-->
 
<!--Form Input End-->

<!--Content Start-->

  <!-- Header container -->

<!-- Page content -->



        <div class="card-header bg-white border-0 ">
          <br>
          <br>
          <div class="row center">
            <div class="col-8">
              <h2 class="text-uppercase text font-30 mb-30"><b>Form Lomba Krenova</b></h2>
              <br>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form method="POST" action="<?php echo e(route('pengguna.store')); ?>">
            <?php echo csrf_field(); ?>
          <form>
            <div class="container">
              <div class="row">
                <h2 class="text-bold mb-30">Data Akun</h2>
                <div class="col-md-12">
                <div class="form-group">
                    <p class="form-control-p" for="input-address">Username *</p>
                    <input id="input-address" class="form-control form-control-alternative" 
                    placeholder="Masukkan Username" name="username" id="username" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                    <p class="form-control-p" for="input-address">Password *</p>
                    <input id="input-address" class="form-control form-control-alternative" 
                    placeholder="Masukkan Password"  name="password" id="password" type="password">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                    <p class="form-control-p" for="input-address">Email *</p>
                    <input id="input-address" class="form-control form-control-alternative" 
                    placeholder="Masukkan Email" name="email" id="email" type="text">
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Address -->
            <br>
            <div class="container">
              <div class="row">
                <h2 class="text-bold mb-30">Data Diri</h2>      
                <div class="col-md-12">
                <div class="form-group">
                    <p class="form-control-p" for="input-address">Organisasi/Institusi *</p>
                    <input id="input-address" class="form-control form-control-alternative" 
                    placeholder="Masukkan Organisasi/Institusi Peserta" name="organisasi" id="organisasi" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                    <p class="form-control-p" for="input-address">Nama Peserta *</p>
                    <input id="input-address" class="form-control form-control-alternative" 
                    placeholder="Masukkan Nama Peserta/Ketua Kelompok" name="name" id="name" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                    <p class="form-control-p" for="input-address">Telepone *</p>
                    <input id="input-address" class="form-control form-control-alternative" 
                    placeholder="Masukkan nomor Telepon Peserta" name="phone" id="phone" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                    <p class="form-control-p" for="input-address">Sosial Media *</p>
                    <input id="input-address" class="form-control form-control-alternative" 
                    placeholder="Masukkan Username Sosial Media Peserta" name="sosmed" id="sosmed" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                <p class="form-control-p">Kategori Lomba yang Akan Diikuti *</p>
                  <select class="form-control" name="kategori" id="kategori">
                    <option>-Pilih Kategori Lomba-</option>
                    <option>Pendidikan</option>
                    <option>Kesehatan</option>
                    <option>Energi</option>
                    <option>Kelautan</option>
                    <option>Pembangunan</option>
                    <option>Rekayasa</option>
                    <option>Sosial Humaniora</option>
                    <option>Industri Kreatif</option>
                    <option>Agribisnis</option>
                    <option>Teknologi</option>
                  </select>
              </div>
            </div>
              </div>
              <div class="file-upload-wrapper">
                <p class="form-control-p" for="input-address">Upload Proposal Krenova *</p>
                <input type="file" id="file" name="file" class="file-upload" />
            </div>
            <br>
            <div class="row">
              <h2 class="text-bold mb-30">Penulisan Proposal</h2>   
              <div class="col-md-12">
              <div class="form-group">
                  <p class="form-control-p" for="input-address">Abstrak *</p>
                  <textarea id="input-address" class="form-control form-control-alternative" rows="10"
                  placeholder="Masukkan Abstrak dalam Proposal" name="abstrak" id="abstrak" type="text"></textarea>
                </div>
                <div class="form-group">
                  <p class="form-control-p" for="input-address">Latar Belakang *</p>
                  <textarea id="input-address" class="form-control form-control-alternative" rows="10"
                  placeholder="Masukkan Latar Belakang dalam Proposal" name="latarbelakang" id="latarbelakang" type="text"></textarea>
                </div>
                <div class="form-group">
                  <p class="form-control-p" for="input-address">Tujuan *</p>
                  <textarea id="input-address" class="form-control form-control-alternative" rows="10"
                  placeholder="Masukkan Tujuan dalam Proposal" name="tujuan" id="tujuan" type="text"></textarea>
                </div>
              </div>
            </div>
            <br>

            <div class="col-lg-10 col-md-9">
              <p class="form-control-p red-text">* Pastikan semua data terisi dan benar</p>
              <br>
            <div class="text-center">
              <button type="submit" class="btn btn-danger my-4">Kembali</button>
              <button type="submit" class="btn2 btn-danger my-4">DAFTAR</button>
              <div class="alert hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg">Terimakasih telah mengikuti krenova! Semoga Sukses!</span>
                <div class="search-close material-icons">&#xE5CD;>
                   <span class="fas fa-times"></span>
                </div>
             </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
<!--Content End-->

<!------------------------------------------------------CONTENT END-------------------------------------------------------------->

<!--Footer Start-->
<footer class="footer footer-one">
  <div class="primary-footer brand-bg darken-2 banner-1">
      <div class="container">
          <a href="#top" class="page-scroll btn-floating btn-large blue back-top waves-effect waves-light" data-section="#top">
          <i class="material-icons">&#xE316;</i>
          </a>

          <div class="row-md-3">
              <div class="col-md-3 widget clearfix">
                  <h2 class="white-text"><b>Kontak Kami</b></h2>
                  <p>Jl. Pemuda No. 148, Kota Semarang, Jawa Tengah 50132</p>

                  <ul class="social-link tt-animate ltr">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                  </ul>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 widget">
                  <h2 class="white-text"><b>Link Terkait</b></h2>
                  <p class="white-text">Portal Besar Ekosistem Inovasi Kota Semarang</p>
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 widget">
              <div class="col-md-5">
                  <img class="img-responsive" src="assets/img/creative/logo.png" alt="">
              </div>
              <h2 class="white-text"><b>Bappeda Kota Semarang</b></h2>
              </div><!-- /.col-md-3 -->                      
          </div><!-- /.row -->
      </div><!-- /.container -->
  </div><!-- /.primary-footer -->
  <div class="secondary-footer brand-bg darken-2 banner-1">
      <div class="container">
      <center><span class="white-text">&copy; Semarang Technopark 2022 &nbsp;  | &nbsp;  All Rights Reserved &nbsp;</span></center>
  </div><!-- /.container -->
  </div>
</footer>
<!--Footer End-->


<!-- jQuery -->
<script src="assets/js/jquery-2.1.3.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/materialize/js/materialize.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/smoothscroll.min.js"></script>
<script src="assets/js/jquery.inview.min.js"></script>
<script src="assets/js/menuzord.js"></script>
<script src="assets/js/equalheight.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/bootstrap-tabcollapse.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/jquery.sticky.min.js"></script>
<script src="assets/js/jquery.countTo.min.js"></script>
<script src="assets/js/jquery.shuffle.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/flexSlider/jquery.flexslider-min.js"></script>
<script src="assets/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- RS5.0 Core JS Files -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- RS5.0 Init  -->
<script type="text/javascript">
jQuery(document).ready(function() {
jQuery(".materialize-slider").revolution({
      sliderType:"standard",
      sliderLayout:"fullwidth",
      delay:3000,
      navigation: {
          keyboardNavigation: "on",
          keyboard_direction: "horizontal",
          mouseScrollNavigation: "off",
          onHoverStop: "off",
          touch: {
              touchenabled: "on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
          },
          arrows: {
              style: "gyges",
              enable: true,
              hide_onmobile: false,
              hide_onleave: true,
              tmp: '',
              left: {
                  h_align: "left",
                  v_align: "center",
                  h_offset: 10,
                  v_offset: 0
              },
              right: {
                  h_align: "right",
                  v_align: "center",
                  h_offset: 10,
                  v_offset: 0
              }
          }
      },
      responsiveLevels:[1240,1024,778,480],
      gridwidth:[1240,1024,778,480],
      gridheight:[700,600,500,500],
      disableProgressBar:"on",
      parallax: {
          type:"mouse",
          origo:"slidercenter",
          speed:2000,
          levels:[2,3,4,5,6,7,12,16,10,50],
      }


  });
});
</script>

<script>
$('#count1').on('inview', function(event, visible, visiblePartX, visiblePartY) {
if (visible) {
    $(this).find('.timer').each(function () {
        var $this = $(this);
        $({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 2000,
            easing: 'swing',
            step: function () {
                $this.text(Math.ceil(this.Counter));
            }
        });
    });
    $(this).off('inview');
}
});
</script>
<script>
          $('button').click(function(){
          $('.alert').addClass("show");
          $('.alert').removeClass("hide");
          $('.alert').addClass("showAlert");
          setTimeout(function(){
             $('.alert').removeClass("show");
             $('.alert').addClass("hide");
           },5000);
         });
         $('.close-btn').click(function(){
           $('.alert').removeClass("show");
           $('.alert').addClass("hide");
         });
</script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->

<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

</body>

</html><?php /**PATH C:\Users\KONTOLODON\Documents\laravel\krenova-main\resources\views/user/tambah_inovasi.blade.php ENDPATH**/ ?>