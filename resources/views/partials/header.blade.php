<header class="header">
        <!-- Header Main -->
        <div class="header-main love-sticky fixed-top">
            <div class="container">
                <div class="header-inner position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6 col-sm-9 col-6">
                            <div class="d-flex align-items-center">
                                <!-- Start Logo -->
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/img/logo.svg" class="main-logo" alt="">
                                        <img src="assets/img/sticky-logo.svg" class="sticky-logo" alt="">
                                    </a>
                                </div>
                                <!-- End of Logo -->

                                <!-- Search Form -->
                                <form class="search-form d-none d-sm-block ms-4" action="#">
                                    <div class="form-group">
                                        <button type="submit">
                                            <img src="assets/img/icons/search.svg" class="svg" alt="">
                                        </button>

                                        <input type="text" class="form-control mb-0" placeholder="Search item…">
                                    </div>
                                </form>
                                <!-- End Search Form -->
                            </div>
                        </div>

                        <div
                            class="col-lg-8 col-md-6 col-sm-3 col-6 d-flex align-items-center justify-content-end position-static">
                            <div class="nav-wrapper d-flex align-items-center">
                                <div class="nav-wrap-inner">
                                    <!-- Nav -->
                                    <ul class="nav">
                                        <li class="current-menu-parent">
                                            <a href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li class="current-menu-children"><a href="index.html">Home V1</a></li>
                                                <li><a href="home-v2.html">Home V2</a></li>
                                                <li><a href="home-v3.html">Home V3</a></li>
                                                <li><a href="home-v4.html">Home V4</a></li>
                                                <li><a href="home-v5.html">Home V5</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Explore</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('explore')}}">Explore</a></li>
                                                <li><a href="profile.html">Profile</a></li>
                                                <li><a href="{{route('upload')}}">Create</a></li>
                                                <li><a href="wallet.html">Wallet</a></li>
                                                <li><a href="help-center.html">Help Center</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="author.html">Author</a></li>
                                                <li><a href="ranking.html">ranking</a></li>
                                                <li><a href="collection.html">Collection</a></li>
                                                <li><a href="item-details.html">Item Details</a></li>
                                                <li><a href="activity.html">Activity</a></li>
                                                <li><a href="upload.html">Upload</a></li>
                                                <li><a href="profile-edit.html">Profile Edit</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- End Nav -->
                                </div>

                                <div class="d-none d-md-flex align-items-center ms-4">
                                    <a href="{{route('upload')}}" class="btn">
                                        <img src="assets/img/icons/create-icon.svg" alt="" class="svg">
                                        Create
                                    </a>

                                    <div class="dropdown ml-10">
                                        <a href="#" class="user-avatar dropdown-toggle" data-bs-toggle="dropdown">
                                            <img src="assets/img/media/user.png" alt="">
                                            <span class="user-status">
                                                <img src="assets/img/icons/check.svg" class="svg" alt="">
                                            </span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="profile.html"><img
                                                        src="assets/img/icons/profile.svg" alt="">
                                                    Profile</a></li>
                                            <li><a class="dropdown-item" href="{{route('upload')}}"><img
                                                        src="assets/img/icons/create.svg" alt=""> Create</a>
                                            </li>
                                            <li><a class="dropdown-item" href="collection.html"><img
                                                        src="assets/img/icons/collection.svg" alt="">
                                                    Collection</a></li>
                                            <li><a class="dropdown-item" href="explore.html"><img
                                                        src="assets/img/icons/explore.svg" alt="">
                                                    Explore</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Main -->
    </header>