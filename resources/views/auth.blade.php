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

    <!-- Login -->
    <div class="py-5 d-flex align-items-center" style="min-height: calc(100vh - 100px);"
        data-bg-img="assets/img/bg/page-bg2.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-10">
                    <!-- Card -->
                    <div class="card login-register-card">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <h2>Login</h2>
                                <p>Don't have an account yet? <a href="register.html" class="c1">Register Now!</a>
                                </p>
                            </div>

                            <form action="#">
                                <div class="form-group">
                                    <label for="email" class="mb-2">Email Address</label>
                                    <input type="email" id="email" class="form-control" placeholder="anefty@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mb-2">Password</label>
                                    <input type="password" id="password" class="form-control"
                                        placeholder="*** **** *** ****">
                                </div>
                                <div class="d-flex pt-2">
                                    <button type="submit" class="btn"><img src="assets/img/icons/btn-login.svg" alt=""
                                            class="svg"> login now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Login -->

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
    <!-- End Back to Top Button -->


    <!-- ======= jQuery Library ======= -->
    @include('partials/script')
</body>

</html>