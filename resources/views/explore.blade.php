@extends('layouts.app')
@section('title', '- Explore')
@section('content')
<body>
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

    <!-- Author -->
    <div class="author-area">
        <div class="author-cover" data-bg-img="assets/img/bg/author-cover.png"></div>
    </div>
    <!-- End Author -->

    <!-- Explore -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row mb-50">
                <div class="col-lg-8 order-1 order-lg-0">
                    <!-- Filter Options -->
                    <div class="filter-options d-flex flex-wrap justify-content-center justify-content-lg-start">
                        <select class="select-rounded mb-10 lg me-4">
                            <option value="Following">all category</option>
                            <option value="Art">Art</option>
                            <option value="Memes">Memes</option>
                            <option value="Anime">Anime</option>
                            <option value="Sports">Sports</option>
                            <option value="Animals">Animals</option>
                            <option value="Plants">Plants</option>
                        </select>
                    </div>
                    <!-- End Filter Options -->
                </div>
                <div class="col-lg-4 order-0 order-lg-1">
                    <!-- Search Form -->
                    <form class="search-form style--two mb-4 mb-lg-2" action="#">
                        <div class="form-group ms-auto me-auto me-lg-0 mw-100">
                            <input type="text" class="form-control mb-0" placeholder="Search item…">
                            <button type="submit">
                                <img src="assets/img/icons/search.svg" class="svg" alt="">
                            </button>
                        </div>
                    </form>
                    <!-- End Search Form -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Single Product -->
                    <div class="single-product mb-30">
                        <img src="assets/img/product/product4.png" alt="">

                        <!-- Product Content -->
                        <div class="product-content">
                            <div class="product-top">
                                <h5>Colorful Abstract Painting</h5>
                            </div>

                            <div class="product-bottom">
                                <!-- Button Group -->
                                <div class="button-group">
                                    <a href="#" class="btn-circle love-react mr-10"></a>

                                    <a href="{{route('item')}}" class="btn btn-border btn-sm">
                                        <img src="assets/img/icons/details.svg" alt="" class="svg">
                                        Lihat Detail
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
        </div>
    </section>
    <!-- End Explore -->
@endsection

