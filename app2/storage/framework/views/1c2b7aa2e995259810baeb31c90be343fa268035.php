 <!-- ======= Header ======= -->
 <header id="header" <?php if(\Request::is('/')): ?> class="fixed-top header-transparent" <?php else: ?> class="fixed-top"  <?php endif; ?>>
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?php echo e(route('/')); ?>"><span>Moderna</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo e(route('/')); ?>">Home</a></li>
          <li><a href="<?php echo e(route('about-us')); ?>">About Us</a></li>
          <li><a href="<?php echo e(route('services')); ?>">Services</a></li>
          <li><a href="<?php echo e(route('portfolio')); ?>">Portfolio</a></li>
          <li><a href="<?php echo e(route('team')); ?>">Team</a></li>
          <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
          <li class="drop-down"><a href="<?php echo e(route('blog')); ?>">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="<?php echo e(route('blog')); ?>">Deep Drop Down 1</a></li>
                  <li><a href="<?php echo e(route('blog')); ?>">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="<?php echo e(route('contact-us')); ?>">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header --><?php /**PATH F:\wamp64\www\u-project\task2\app2\resources\views/layouts/header.blade.php ENDPATH**/ ?>