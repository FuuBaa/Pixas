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

    <!-- Register -->
    <div class="py-5 d-flex align-items-center" style="min-height: calc(100vh - 100px);"
        data-bg-img="assets/img/bg/page-bg2.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <!-- Card -->
                    <div class="card login-register-card">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <h2>Register New Account</h2>
                                <p>Already account yet? <a href="login.html" class="c1">Login Now!</a></p>
                            </div>

                            <!-- Register Form -->
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="display_name" class="mb-2">Display name</label>
                                            <input type="text" id="display_name" class="form-control"
                                                placeholder="e.g@alex_anefty">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="mb-2">Email Address</label>
                                            <input type="email" id="email" class="form-control"
                                                placeholder="anefty@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username" class="mb-2">Username</label>
                                            <input type="text" id="username" class="form-control"
                                                placeholder="e.g@alex_anefty">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone_num" class="mb-2">Phone Number</label>
                                            <input type="tel" id="phone_num" class="form-control"
                                                placeholder="+01 776-542154">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password" class="mb-2">Password</label>
                                            <input type="password" id="password" class="form-control"
                                                placeholder="*** **** *** ****">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="re-password" class="mb-2">Re-enter Password</label>
                                            <input type="password" id="re-password" class="form-control"
                                                placeholder="*** **** *** ****">
                                        </div>
                                    </div>
                                    <div class="col-12 pt-2">
                                        <button type="submit" class="btn"><img src="assets/img/icons/btn-login.svg"
                                                alt="" class="svg"> register now</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Register Form -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Register -->

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
    <!-- End Back to Top Button -->

    @include('partials/script')
</body>

</html>