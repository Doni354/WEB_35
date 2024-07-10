<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php echo $Title; ?> | <?php foreach ($profil as $descper) : ?><?= $descper->nama_perusahaan; ?><?php endforeach; ?>
  </title>
  <meta name="description" content="<?php echo $Meta; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="<?= base_url('asset-user') ?>/site.webmanifest">
  <?php foreach ($profil as $perusahaan) : ?>
    <link rel="shortcut icon" href="<?= base_url('asset-user/images/') ?><?= $perusahaan->favicon_website ?>">
  <?php endforeach; ?>

  <!-- CSS here -->
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/flaticon.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/slicknav.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/animate.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/slick.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/nice-select.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/style.css">
</head>

<body>



  <?= $this->include('user/layout/header'); ?>
  <!-- render halaman konten -->
  <?= $this->renderSection('content'); ?>

  <!-- Preloader Start -->
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="<?= base_url('asset-user') ?>/img/logo/logo.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader Start -->

  <!-- footer -->
  <?= $this->include('user/layout/footer');  ?>

  <!-- JS here -->

  <!-- All JS Custom Plugins Link Here here -->
  <script src="<?= base_url('asset-user') ?>/js/vendor/modernizr-3.5.0.min.js"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="<?= base_url('asset-user') ?>/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/popper.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/bootstrap.min.js"></script>
  <!-- Jquery Mobile Menu -->
  <script src="<?= base_url('asset-user') ?>/js/jquery.slicknav.min.js"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="<?= base_url('asset-user') ?>/js/owl.carousel.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/slick.min.js"></script>
  <!-- Date Picker -->
  <script src="<?= base_url('asset-user') ?>/js/gijgo.min.js"></script>
  <!-- One Page, Animated-HeadLin -->
  <script src="<?= base_url('asset-user') ?>/js/wow.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/animated.headline.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.magnific-popup.js"></script>

  <!-- icon wa -->
  <?php foreach ($profil as $iconwa) : ?>
    <a class="whats-app" href="<?= $iconwa->link_whatsapp ?>" target="_blank" style="position: fixed; bottom: 30px; right: 10px; z-index: 1000;">
      <img data-src="<?= base_url('asset-user/images/iconwa.png'); ?>" alt="WhatsApp" class="my-float lazyload" style="width: 80px; height: auto; padding: 10px; transition: background-color 0.3s ease-in-out;">
    </a>
  <?php endforeach; ?>

  <!-- contact js -->
  <script src="<?= base_url('asset-user') ?>/js/contact.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.form.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.validate.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/mail-script.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.ajaxchimp.min.js"></script>

  <!-- Jquery Plugins, main Jquery -->
  <script src="<?= base_url('asset-user') ?>/js/plugins.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/main.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery-ui.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/popper.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/bootstrap.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/owl.carousel.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.stellar.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.countdown.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/bootstrap-datepicker.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/aos.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.fancybox.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.sticky.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/lazysizes.min.js"></script>
</body>

</html>