<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    
    <title>Anefty || NFT Marketplace HTML5 Template</title>

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

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
    <!-- End Back to Top Button -->
    @include('partials/script')

</body>

</html>