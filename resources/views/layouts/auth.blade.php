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

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" />

    <!-- Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@500;600;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">

        @include('partials/css')
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <img src="assets/img/icons/text.svg" alt="" class="svg preloader-svg">
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Login -->
    <div class="py-5 d-flex align-items-center" style="min-height: calc(100vh - 100px);"
        data-bg-img="assets/img/bg/login.jpg">
        <div class="container">
            <div class="row justify-content-center">
            @yield('content') 
            </div>
        </div>
    </div>
    <!-- End Login -->
    
    <!-- ======= jQuery Library ======= -->
    @include('partials/script')
</body>

</html>