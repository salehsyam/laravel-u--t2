 <!-- ======= Header ======= -->
 <header id="header" @if (\Request::is('/')) class="fixed-top header-transparent" @else class="fixed-top"  @endif>
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="{{route('/')}}"><span>Moderna</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('/')}}">Home</a></li>
          <li><a href="{{route('about-us')}}">About Us</a></li>
          <li><a href="{{route('services')}}">Services</a></li>
          <li><a href="{{route('portfolio')}}">Portfolio</a></li>
          <li><a href="{{route('team')}}">Team</a></li>
          <li><a href="{{route('blog')}}">Blog</a></li>
          <li class="drop-down"><a href="{{route('blog')}}">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="{{route('blog')}}">Deep Drop Down 1</a></li>
                  <li><a href="{{route('blog')}}">Deep Drop Down 2</a></li>
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
          <li><a href="{{route('contact-us')}}">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->