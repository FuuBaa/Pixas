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

    <!-- 404 -->
    <div class="py-5 d-flex align-items-center vh-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- 404 -->
                    <div class="card card-big">
                        <div class="card-body">
                            <div class="content-404">
                                <div class="content-404-left">
                                    <h2>Don't Cry</h2>
                                    <a href="{{route('home')}}"">
                                        <img src="assets/img/icons/btn-home.svg" class="svg" alt="">
                                        Back Home
                                    </a>
                                </div>
                                <div class="content-404-right">
                                    <h4>Ini hanya kesalahan 404...!</h4>
                                    <p>Halaman yang kamu cari tidak tersedia sekarang 
                                        mohon coba lagi lain kali. Terima Kasih!</p>
                                </div>
                            </div>
                            <div class="img-404 d-flex justify-content-end">
                                <img src="assets/img/media/4041.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- End 404 -->
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
    <!-- End Back to Top Button -->

    @include('partials/script')
</body>

</html>