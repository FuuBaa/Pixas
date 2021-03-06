@extends('layouts.app')
@section('title', 'Home')
@section('content')
<!-- Banner -->
<div class="banner ov-hidden">
        <div id="particles" data-bg-img="assets/img/bg/banner-bg.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Banner Content -->
                    <div class="banner-content text-white mt-xl-5 pt-xl-2 mb-5 mb-lg-0">
                        <h1>Digital Collection & Sell on <span>NFTs</span> Marketplace</h1>
                        <ul class="list-info text-white">
                            <li>
                                <h4><span class="counter">3</span>k<span class="c1">+</span></h4>
                                <h6>Artwork</h6>
                            </li>
                            <li>
                                <h4><span class="counter">9</span>k<span class="c1">+</span></h4>
                                <h6>Auction</h6>
                            </li>
                            <li>
                                <h4><span class="counter">6</span>k<span class="c1">+</span></h4>
                                <h6>Artist</h6>
                            </li>
                        </ul>
                        <div class="button-group">
                            <a href="create.html" class="btn">
                                <img src="assets/img/icons/discover.svg" alt="" class="svg">
                                Discover
                            </a>
                            <a href="create.html" class="btn btn-link">
                                <img src="assets/img/icons/create-icon.svg" alt="" class="svg">
                                Create NFT
                            </a>
                        </div>
                    </div>
                    <!-- End Banner Content -->
                </div>
                <div class="col-lg-6">
                    <!-- Banner IMG -->
                    <div class="banner-img mb-60 mb-lg-0">
                        <img src="assets/img/media/banner-img.png" alt="">

                        <div class="banner-img-content">
                            <h2>Do a Portrait Painting Artwork!</h2>

                            <!-- List Info -->
                            <ul class="list-info text-white style--two">
                                <li>
                                    <h5>Current Bid</h5>
                                    <h4 class="mb-0"><img src="assets/img/icons/eth.svg" alt="" class="svg"> 03.66 ETH
                                    </h4>
                                </li>
                                <li>
                                    <h5>Auction Ending In</h5>
                                    <div class="countdown-wrap">
                                        <img src="assets/img/icons/time.svg" alt="" class="svg">
                                        <ul class="countdown">
                                            <li>
                                                <span class="hours">00</span>
                                            </li>
                                            <li class="ms-1 me-1"> : </li>
                                            <li>
                                                <span class="minutes">00</span>
                                            </li>
                                            <li class="ms-1 me-1"> : </li>
                                            <li>
                                                <span class="seconds">00</span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!-- End List Info -->

                            <!-- Button Group -->
                            <div class="button-group">
                                <a href="#" class="btn-circle love-react mr-10"></a>

                                <div class="dropdown mr-10">
                                    <button class="btn-circle dropdown-toggle" data-bs-toggle="dropdown">
                                        <img src="assets/img/icons/share.svg" alt="" class="svg">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" target="_blank"
                                                href="https://www.facebook.com/"><img
                                                    src="assets/img/icons/facebook.svg" alt=""> Share on Facebook</a>
                                        </li>
                                        <li><a class="dropdown-item" target="_blank"
                                                href="https://www.twitter.com/"><img src="assets/img/icons/twitter.svg"
                                                    alt=""> Share on Twitter</a></li>
                                        <li><a class="dropdown-item" target="_blank"
                                                href="https://www.Instagram.com/"><img
                                                    src="assets/img/icons/instagram.svg" alt=""> Share on Instagram</a>
                                        </li>
                                        <li><a class="dropdown-item" target="_blank"
                                                href="https://www.linkedin.com/"><img
                                                    src="assets/img/icons/linkedin.svg" alt=""> Share on Linkedin</a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="item-details.html" class="btn btn-sm">
                                    <img src="assets/img/icons/judge-icon.svg" alt="" class="svg">
                                    Place Bid
                                </a>
                            </div>
                            <!-- End Button Group -->
                        </div>
                    </div>
                    <!-- End Banner IMG -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- About -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Section Title -->
                    <div class="section-title text-white mb-4">
                        <h2>Who Trust In Us</h2>
                    </div>
                    <!-- End Section Title -->
                </div>
                <div class="col-lg-7">
                    <div class="content text-white mt-n1">
                        <p>NFTs are non-fungible tokens. They are unique items that you can't replace with something
                            else. For example, a one-of-a-kind trading card is an NFT ??? you can't just replace it with
                            any other card. If you trade your card for some other card, you have something different.
                            These differ from fungible items, which are often the same as each other.</p>
                        <p>Example, a one-of-a-kind trading card is an NFT ??? you can't just replace it with any other
                            card. If you These differ from fungible items, which are often the same as each other</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-1">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="swiper walletCarousel" data-swiper-loop="true" data-swiper-items="auto"
                        data-swiper-margin="30" data-swiper-autoplay="true">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="https://metamask.io/download.html" target="_blank" class="wallet">
                                    <img src="assets/img/media/wallet1.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://user.bitski.com/" target="_blank" class="wallet">
                                    <img src="assets/img/media/wallet2.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://wallet.klaytn.com/" target="_blank" class="wallet">
                                    <img src="assets/img/media/wallet3.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://fortmatic.com/" target="_blank" class="wallet">
                                    <img src="assets/img/media/wallet4.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://authereum.com/welcome/" target="_blank" class="wallet">
                                    <img src="assets/img/media/wallet5.png" alt="">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="https://www.venly.io/" target="_blank" class="wallet">
                                    <img src="assets/img/media/wallet6.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Video -->
    <div class="vdo_sec">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Video Button Wrapper -->
                    <div class="vdo-btn-wrapper gradient-box">
                        <img src="assets/img/icons/bg-play.png" class="gradient-box-icon" alt="">
                        <a href="https://www.youtube.com/watch?v=gfGuPd1CELo"
                            class="vdo_btn popup-video icon-mobile-white">
                            <img src="assets/img/icons/play.svg" alt="" class="svg">
                            <h3 class="text-white">Learn How Anefty Working!</h3>
                        </a>
                    </div>
                    <!-- End Video Button Wrapper -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Video -->

    <!-- Live Auction -->
    <section class="pt-120 pb-120 section-shape">
        <div class="container mt-60 mt-lg-0">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <!-- Section Title -->
                    <div class="section-title text-white text-center">
                        <h2>Live Auctions</h2>
                        <p>NFTs are non-fungible tokens. They are unique items that you can't replace with something
                            else. for trading card is an NFT ??? you can't just replace it with any other card.</p>
                    </div>
                    <!-- End Section Title -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="swiper live-auction" data-swiper-loop="true" data-swiper-items="3"
                        data-swiper-margin="30"
                        data-swiper-breakpoints='{"0": {"slidesPerView": "1"}, "768": {"slidesPerView": "2"}, "1200": {"slidesPerView": "3"}}'>
                        <div class="swiper-wrapper mb-60">
                            <div class="swiper-slide">
                                <!-- Single Product -->
                                <div class="single-product style--one">
                                    <img src="assets/img/product/product1.png" alt="">

                                    <!-- Product Content -->
                                    <div class="product-content">
                                        <div class="product-top">
                                            <h5>Liquid Forest Princess</h5>
                                            <div class="d-flex justify-content-between">
                                                <h6>03.66 ETH</h6>

                                                <div class="countdown-wrap">
                                                    <ul class="countdown">
                                                        <li>
                                                            <span class="hours">00</span>
                                                        </li>
                                                        <li class="ms-1 me-1"> : </li>
                                                        <li>
                                                            <span class="minutes">00</span>
                                                        </li>
                                                        <li class="ms-1 me-1"> : </li>
                                                        <li>
                                                            <span class="seconds">00</span>
                                                        </li>
                                                        <li class="text-uppercase ms-1">left</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-bottom">
                                            <!-- Button Group -->
                                            <div class="button-group">
                                                <a href="#" class="btn-circle love-react mr-10"></a>

                                                <div class="dropdown mr-10">
                                                    <button class="btn-circle btn-border dropdown-toggle"
                                                        data-bs-toggle="dropdown">
                                                        <img src="assets/img/icons/share.svg" alt="" class="svg">
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.facebook.com/"><img
                                                                    src="assets/img/icons/facebook.svg" alt=""> Share on
                                                                Facebook</a></li>
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.twitter.com/"><img
                                                                    src="assets/img/icons/twitter.svg" alt=""> Share on
                                                                Twitter</a></li>
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.Instagram.com/"><img
                                                                    src="assets/img/icons/instagram.svg" alt=""> Share
                                                                on Instagram</a></li>
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.linkedin.com/"><img
                                                                    src="assets/img/icons/linkedin.svg" alt=""> Share on
                                                                Linkedin</a></li>
                                                    </ul>
                                                </div>

                                                <a href="item-details.html" class="btn btn-sm btn-border">
                                                    <img src="assets/img/icons/judge-icon.svg" alt="" class="svg">
                                                    Place Bid
                                                </a>
                                            </div>
                                            <!-- End Button Group -->
                                        </div>
                                    </div>
                                    <!-- End Product Content -->
                                </div>
                                <!-- End Single Product -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Product -->
                                <div class="single-product style--one">
                                    <img src="assets/img/product/product2.png" alt="">

                                    <!-- Product Content -->
                                    <div class="product-content">
                                        <div class="product-top">
                                            <h5>The Girl With The Firefly</h5>
                                            <div class="d-flex justify-content-between">
                                                <h6>0.88 ETH</h6>

                                                <div class="countdown-wrap">
                                                    <ul class="countdown">
                                                        <li>
                                                            <span class="hours">00</span>
                                                        </li>
                                                        <li class="ms-1 me-1"> : </li>
                                                        <li>
                                                            <span class="minutes">00</span>
                                                        </li>
                                                        <li class="ms-1 me-1"> : </li>
                                                        <li>
                                                            <span class="seconds">00</span>
                                                        </li>
                                                        <li class="text-uppercase ms-1">left</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-bottom">
                                            <!-- Button Group -->
                                            <div class="button-group">
                                                <a href="#" class="btn-circle love-react mr-10"></a>

                                                <div class="dropdown mr-10">
                                                    <button class="btn-circle btn-border dropdown-toggle"
                                                        data-bs-toggle="dropdown">
                                                        <img src="assets/img/icons/share.svg" alt="" class="svg">
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.facebook.com/"><img
                                                                    src="assets/img/icons/facebook.svg" alt=""> Share on
                                                                Facebook</a></li>
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.twitter.com/"><img
                                                                    src="assets/img/icons/twitter.svg" alt=""> Share on
                                                                Twitter</a></li>
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.Instagram.com/"><img
                                                                    src="assets/img/icons/instagram.svg" alt=""> Share
                                                                on Instagram</a></li>
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.linkedin.com/"><img
                                                                    src="assets/img/icons/linkedin.svg" alt=""> Share on
                                                                Linkedin</a></li>
                                                    </ul>
                                                </div>

                                                <a href="item-details.html" class="btn btn-border btn-sm">
                                                    <img src="assets/img/icons/judge-icon.svg" alt="" class="svg">
                                                    Place Bid
                                                </a>
                                            </div>
                                            <!-- End Button Group -->
                                        </div>
                                    </div>
                                    <!-- End Product Content -->
                                </div>
                                <!-- End Single Product -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Product -->
                                <div class="single-product style--one">
                                    <img src="assets/img/product/product3.png" alt="">

                                    <!-- Product Content -->
                                    <div class="product-content">
                                        <div class="product-top">
                                            <h5>Synthase On Modern Painting</h5>
                                            <div class="d-flex justify-content-between">
                                                <h6>0.84 ETH</h6>

                                                <div class="countdown-wrap">
                                                    <ul class="countdown">
                                                        <li>
                                                            <span class="hours">00</span>
                                                        </li>
                                                        <li class="ms-1 me-1"> : </li>
                                                        <li>
                                                            <span class="minutes">00</span>
                                                        </li>
                                                        <li class="ms-1 me-1"> : </li>
                                                        <li>
                                                            <span class="seconds">00</span>
                                                        </li>
                                                        <li class="text-uppercase ms-1">left</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-bottom">
                                            <!-- Button Group -->
                                            <div class="button-group">
                                                <a href="#" class="btn-circle love-react mr-10"></a>

                                                <div class="dropdown mr-10">
                                                    <button class="btn-circle btn-border dropdown-toggle"
                                                        data-bs-toggle="dropdown">
                                                        <img src="assets/img/icons/share.svg" alt="" class="svg">
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.facebook.com/"><img
                                                                    src="assets/img/icons/facebook.svg" alt=""> Share on
                                                                Facebook</a></li>
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.twitter.com/"><img
                                                                    src="assets/img/icons/twitter.svg" alt=""> Share on
                                                                Twitter</a></li>
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.Instagram.com/"><img
                                                                    src="assets/img/icons/instagram.svg" alt=""> Share
                                                                on Instagram</a></li>
                                                        <li><a class="dropdown-item" target="_blank"
                                                                href="https://www.linkedin.com/"><img
                                                                    src="assets/img/icons/linkedin.svg" alt=""> Share on
                                                                Linkedin</a></li>
                                                    </ul>
                                                </div>

                                                <a href="item-details.html" class="btn btn-border btn-sm">
                                                    <img src="assets/img/icons/judge-icon.svg" alt="" class="svg">
                                                    Place Bid
                                                </a>
                                            </div>
                                            <!-- End Button Group -->
                                        </div>
                                    </div>
                                    <!-- End Product Content -->
                                </div>
                                <!-- End Single Product -->
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Live Auction -->

    <!-- Explore Feeds -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <!-- Section Title -->
                    <div class="section-title text-white text-center">
                        <h2>Explore Feeds</h2>
                        <p>NFTs are non-fungible tokens. They are unique items that you can't replace with something
                            else. for trading card is an NFT ??? you can't just replace it with any other card.</p>
                    </div>
                    <!-- End Section Title -->
                </div>
            </div>
        </div>

        <!-- Swiper -->
        <div class="swiper explore-feeds" data-swiper-loop="true" data-swiper-items="auto" data-swiper-margin="30">
            <div class="swiper-wrapper mb-60">
                <div class="swiper-slide">
                    <!-- Single Product -->
                    <div class="single-product style--one">
                        <img src="assets/img/product/product4.png" alt="">

                        <!-- Product Content -->
                        <div class="product-content">
                            <div class="product-top">
                                <h5>Colorful Abstract Painting</h5>
                                <div class="d-flex justify-content-between">
                                    <h6>0.69 ETH</h6>
                                    <h6>2 to 100</h6>
                                </div>
                            </div>

                            <div class="product-bottom">
                                <!-- Button Group -->
                                <div class="button-group">
                                    <a href="#" class="btn-circle love-react mr-10"></a>

                                    <div class="dropdown mr-10">
                                        <button class="btn-circle btn-border dropdown-toggle" data-bs-toggle="dropdown">
                                            <img src="assets/img/icons/share.svg" alt="" class="svg">
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.facebook.com/"><img
                                                        src="assets/img/icons/facebook.svg" alt=""> Share on
                                                    Facebook</a></li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.twitter.com/"><img
                                                        src="assets/img/icons/twitter.svg" alt=""> Share on Twitter</a>
                                            </li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.Instagram.com/"><img
                                                        src="assets/img/icons/instagram.svg" alt=""> Share on
                                                    Instagram</a></li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.linkedin.com/"><img
                                                        src="assets/img/icons/linkedin.svg" alt=""> Share on
                                                    Linkedin</a></li>
                                        </ul>
                                    </div>

                                    <a href="item-details.html" class="btn btn-border btn-sm">
                                        <img src="assets/img/icons/judge-icon.svg" alt="" class="svg">
                                        Place Bid
                                    </a>
                                </div>
                                <!-- End Button Group -->
                            </div>
                        </div>
                        <!-- End Product Content -->
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Product -->
                    <div class="single-product style--one">
                        <img src="assets/img/product/product5.png" alt="">

                        <!-- Product Content -->
                        <div class="product-content">
                            <div class="product-top">
                                <h5>Liquid Forest Princess</h5>
                                <div class="d-flex justify-content-between">
                                    <h6>0.89 ETH</h6>
                                    <h6>2 to 100</h6>
                                </div>
                            </div>

                            <div class="product-bottom">
                                <!-- Button Group -->
                                <div class="button-group">
                                    <a href="#" class="btn-circle love-react mr-10"></a>

                                    <div class="dropdown mr-10">
                                        <button class="btn-circle btn-border dropdown-toggle" data-bs-toggle="dropdown">
                                            <img src="assets/img/icons/share.svg" alt="" class="svg">
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.facebook.com/"><img
                                                        src="assets/img/icons/facebook.svg" alt=""> Share on
                                                    Facebook</a></li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.twitter.com/"><img
                                                        src="assets/img/icons/twitter.svg" alt=""> Share on Twitter</a>
                                            </li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.Instagram.com/"><img
                                                        src="assets/img/icons/instagram.svg" alt=""> Share on
                                                    Instagram</a></li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.linkedin.com/"><img
                                                        src="assets/img/icons/linkedin.svg" alt=""> Share on
                                                    Linkedin</a></li>
                                        </ul>
                                    </div>

                                    <a href="item-details.html" class="btn btn-border btn-sm">
                                        <img src="assets/img/icons/judge-icon.svg" alt="" class="svg">
                                        Place Bid
                                    </a>
                                </div>
                                <!-- End Button Group -->
                            </div>
                        </div>
                        <!-- End Product Content -->
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Product -->
                    <div class="single-product style--one">
                        <img src="assets/img/product/product6.png" alt="">

                        <!-- Product Content -->
                        <div class="product-content">
                            <div class="product-top">
                                <h5>Animal Girl Painting</h5>
                                <div class="d-flex justify-content-between">
                                    <h6>1.89 ETH</h6>
                                    <h6>2 to 100</h6>
                                </div>
                            </div>

                            <div class="product-bottom">
                                <!-- Button Group -->
                                <div class="button-group">
                                    <a href="#" class="btn-circle love-react mr-10"></a>

                                    <div class="dropdown mr-10">
                                        <button class="btn-circle btn-border dropdown-toggle" data-bs-toggle="dropdown">
                                            <img src="assets/img/icons/share.svg" alt="" class="svg">
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.facebook.com/"><img
                                                        src="assets/img/icons/facebook.svg" alt=""> Share on
                                                    Facebook</a></li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.twitter.com/"><img
                                                        src="assets/img/icons/twitter.svg" alt=""> Share on Twitter</a>
                                            </li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.Instagram.com/"><img
                                                        src="assets/img/icons/instagram.svg" alt=""> Share on
                                                    Instagram</a></li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.linkedin.com/"><img
                                                        src="assets/img/icons/linkedin.svg" alt=""> Share on
                                                    Linkedin</a></li>
                                        </ul>
                                    </div>

                                    <a href="item-details.html" class="btn btn-border btn-sm">
                                        <img src="assets/img/icons/judge-icon.svg" alt="" class="svg">
                                        Place Bid
                                    </a>
                                </div>
                                <!-- End Button Group -->
                            </div>
                        </div>
                        <!-- End Product Content -->
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Product -->
                    <div class="single-product style--one">
                        <img src="assets/img/product/product7.png" alt="">

                        <!-- Product Content -->
                        <div class="product-content">
                            <div class="product-top">
                                <h5>Animal Girl Painting</h5>
                                <div class="d-flex justify-content-between">
                                    <h6>3.99 ETH</h6>
                                    <h6>2 to 100</h6>
                                </div>
                            </div>

                            <div class="product-bottom">
                                <!-- Button Group -->
                                <div class="button-group">
                                    <a href="#" class="btn-circle love-react mr-10"></a>

                                    <div class="dropdown mr-10">
                                        <button class="btn-circle btn-border dropdown-toggle" data-bs-toggle="dropdown">
                                            <img src="assets/img/icons/share.svg" alt="" class="svg">
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.facebook.com/"><img
                                                        src="assets/img/icons/facebook.svg" alt=""> Share on
                                                    Facebook</a></li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.twitter.com/"><img
                                                        src="assets/img/icons/twitter.svg" alt=""> Share on Twitter</a>
                                            </li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.Instagram.com/"><img
                                                        src="assets/img/icons/instagram.svg" alt=""> Share on
                                                    Instagram</a></li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.linkedin.com/"><img
                                                        src="assets/img/icons/linkedin.svg" alt=""> Share on
                                                    Linkedin</a></li>
                                        </ul>
                                    </div>

                                    <a href="item-details.html" class="btn btn-border btn-sm">
                                        <img src="assets/img/icons/judge-icon.svg" alt="" class="svg">
                                        Place Bid
                                    </a>
                                </div>
                                <!-- End Button Group -->
                            </div>
                        </div>
                        <!-- End Product Content -->
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Product -->
                    <div class="single-product style--one">
                        <img src="assets/img/product/product8.png" alt="">

                        <!-- Product Content -->
                        <div class="product-content">
                            <div class="product-top">
                                <h5>Animal Girl Painting</h5>
                                <div class="d-flex justify-content-between">
                                    <h6>1.79 ETH</h6>
                                    <h6>2 to 100</h6>
                                </div>
                            </div>

                            <div class="product-bottom">
                                <!-- Button Group -->
                                <div class="button-group">
                                    <a href="#" class="btn-circle love-react mr-10"></a>

                                    <div class="dropdown mr-10">
                                        <button class="btn-circle btn-border dropdown-toggle" data-bs-toggle="dropdown">
                                            <img src="assets/img/icons/share.svg" alt="" class="svg">
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.facebook.com/"><img
                                                        src="assets/img/icons/facebook.svg" alt=""> Share on
                                                    Facebook</a></li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.twitter.com/"><img
                                                        src="assets/img/icons/twitter.svg" alt=""> Share on Twitter</a>
                                            </li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.Instagram.com/"><img
                                                        src="assets/img/icons/instagram.svg" alt=""> Share on
                                                    Instagram</a></li>
                                            <li><a class="dropdown-item" target="_blank"
                                                    href="https://www.linkedin.com/"><img
                                                        src="assets/img/icons/linkedin.svg" alt=""> Share on
                                                    Linkedin</a></li>
                                        </ul>
                                    </div>

                                    <a href="item-details.html" class="btn btn-border btn-sm">
                                        <img src="assets/img/icons/judge-icon.svg" alt="" class="svg">
                                        Place Bid
                                    </a>
                                </div>
                                <!-- End Button Group -->
                            </div>
                        </div>
                        <!-- End Product Content -->
                    </div>
                    <!-- End Single Product -->
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- End Explore Feeds -->

    <!-- Support Center -->
    <section class="pb-120 mt-lg-120 pt-60 pt-lg-0 section-shape section-shape-right">
        <div class="container">
            <div class="row gutter-60">
                <div class="col-lg-4">
                    <!-- Support IMG -->
                    <div class="support-img">
                        <img src="assets/img/media/support-img.png" alt="">
                    </div>
                    <!-- End Support IMG -->
                </div>
                <div class="col-lg-8">
                    <div class="d-flex justify-content-end mb-60">
                        <!-- Gradient box -->
                        <div class="quick-contact gradient-box">
                            <img src="assets/img/icons/phone.png" class="gradient-box-icon" alt="">
                            <h3 class="text-white">Quick Contact Us:</h3>
                            <a href="tel:0032525700">+003 252-5700</a>
                        </div>
                        <!-- End Gradient box -->
                    </div>

                    <!-- Support Content -->
                    <div class="support-content">
                        <!-- Section Title -->
                        <div class="section-title text-white">
                            <h2>Support Center</h2>
                            <p>Anefty are non-fungible tokens. they are unique items that you can't replace with
                                something else. for example, a one of a kind trading card is an NFT ??? you can't just
                                replace it with any other card.</p>
                        </div>
                        <!-- End Section Title -->

                        <!-- Support Form -->
                        <form action="#" class="support-form row">
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control" placeholder="Write Message Here"
                                    required></textarea>
                                <button type="submit" class="btn"><img src="assets/img/icons/mail.svg" alt=""
                                        class="svg"> Send Request</button>
                            </div>
                        </form>
                        <!-- End Support Form -->
                    </div>
                    <!-- End Support Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Support Center -->

    <!-- Top Collection -->
    <section class="pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <!-- Section Title -->
                    <div class="section-title text-white text-center">
                        <h2>Top Collections</h2>
                        <p>NFTs are non-fungible tokens. They are unique items that you can't replace with something
                            else. for trading card is an NFT ??? you can't just replace it with any other card.</p>
                    </div>
                    <!-- End Section Title -->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="01">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection1.png" alt="">
                        </div>
                        <div class="content">
                            <h5>Meka_Verse</h5>
                            <span>$203,621,269</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="02">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection2.gif" alt="">
                        </div>
                        <div class="content">
                            <h5>Bored_YachtClub</h5>
                            <span>$118,321,276</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="03">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection3.png" alt="">
                        </div>
                        <div class="content">
                            <h5>Bambooz_lers</h5>
                            <span>$10,429,103</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="04">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection4.png" alt="">
                        </div>
                        <div class="content">
                            <h5>The_Humanoids</h5>
                            <span>$7,991,156</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="05">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection5.png" alt="">
                        </div>
                        <div class="content">
                            <h5>Stacked_Toadz</h5>
                            <span>$6,700,653</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="06">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection6.png" alt="">
                        </div>
                        <div class="content">
                            <h5>Mutant_Cats</h5>
                            <span>$22,278,069</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="07">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection7.gif" alt="">
                        </div>
                        <div class="content">
                            <h5>Mutant_YachtClub</h5>
                            <span>$10,307,676</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="08">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection8.png" alt="">
                        </div>
                        <div class="content">
                            <h5>Optics_PeopleS</h5>
                            <span>$19,359,169</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>


                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="09">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection9.gif" alt="">
                        </div>
                        <div class="content">
                            <h5>Goofy_Oversized</h5>
                            <span>$203,621,269</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="10">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection10.png" alt="">
                        </div>
                        <div class="content">
                            <h5>Cyber_Kongz</h5>
                            <span>$7,227,956</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="11">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection11.png" alt="">
                        </div>
                        <div class="content">
                            <h5>The_DogePound</h5>
                            <span>$6,609,169</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <!-- Collection -->
                    <a href="collection.html" class="single-collection" data-count="12">
                        <div class="collection-img">
                            <img src="assets/img/collections/collection12.gif" alt="">
                        </div>
                        <div class="content">
                            <h5>Halloween_Bears</h5>
                            <span>$4,673,966</span>
                        </div>
                    </a>
                    <!-- End Collection -->
                </div>
            </div>
        </div>
    </section>
<!-- End Top Collection -->
@endsection
