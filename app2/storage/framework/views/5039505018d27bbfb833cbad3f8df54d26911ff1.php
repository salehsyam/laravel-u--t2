<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Moderna | <?php echo $__env->yieldContent('title'); ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link  href="<?php echo e(asset('front_files/assets/img/favicon.png')); ?>" rel="icon">
  <link  href="<?php echo e(asset('front_files/assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link  href="<?php echo e(asset('front_files/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link  href="<?php echo e(asset('front_files/assets/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
  <link  href="<?php echo e(asset('front_files/assets/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
  <link  href="<?php echo e(asset('front_files/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link  href="<?php echo e(asset('front_files/assets/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
  <link  href="<?php echo e(asset('front_files/assets/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
  <link  href="<?php echo e(asset('front_files/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link  href="<?php echo e(asset('front_files/assets/css/style.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.0.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  
  <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    <?php echo $__env->yieldContent('content'); ?>
    
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script  src="<?php echo e(asset('front_files/assets/vendor/jquery/jquery.min.js')); ?>"></script>
  <script  src="<?php echo e(asset('front_files/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script  src="<?php echo e(asset('front_files/assets/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
  <script  src="<?php echo e(asset('front_files/assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script  src="<?php echo e(asset('front_files/assets/vendor/venobox/venobox.min.js')); ?>"></script>
  <script  src="<?php echo e(asset('front_files/assets/vendor/waypoints/jquery.waypoints.min.js')); ?>"></script>
  <script  src="<?php echo e(asset('front_files/assets/vendor/counterup/counterup.min.js')); ?>"></script>
  <script  src="<?php echo e(asset('front_files/assets/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
  <script  src="<?php echo e(asset('front_files/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script  src="<?php echo e(asset('front_files/assets/vendor/aos/aos.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script  src="<?php echo e(asset('front_files/assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH F:\wamp64\www\u-project\task2\app2\resources\views/layouts/master.blade.php ENDPATH**/ ?>