<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>news | @yield('title') </title>
    <!-- Bootstrap core CSS -->
    <link  href="{{asset('front_files/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link  href="{{asset('front_files/css/modern-business.css')}}" rel="stylesheet">
    @yield('styles')
</head>

<body>
{{--   header --}}
@include('layouts.navbar')

{{-- Content--}}
@yield('content')
{{--   Footer --}}

<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Momen Sisalem 2018</p>
    </div>
    <!-- /.container -->
</footer>
<!-- Bootstrap core JavaScript -->
<script  src="{{asset('front_files/vendor/jquery/jquery.min.js')}}"></script>
<script  src="{{asset('front_files/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@yield('scripts')
</body>

</html>
