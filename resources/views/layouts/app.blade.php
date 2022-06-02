<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    
    <title>{{config('app.name')}} @yield('title')</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
        @include('partials/css')

</head>

<body data-bg-img="assets/img/bg/page-bg.png">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <img src="assets/img/icons/text.svg" alt="" class="svg preloader-svg">
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header -->
    @include('partials/header')
    <!-- End Header -->
    @yield('content')
    <!-- Footer -->
    @include('partials/footer')
    <!-- End Footer -->
    <!-- End Back to Top Button -->
    @include('partials/script')

</body>

</html>