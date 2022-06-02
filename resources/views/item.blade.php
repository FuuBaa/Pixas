@extends('layouts.app')
@section('title', '- Item')
@section('content')
    <!-- Author -->
    <div class="author-area">
        <div class="author-cover" data-bg-img="assets/img/bg/author-cover.png"></div>
    </div>
    <!-- End Author -->

    <!-- Item Details -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 order-1 order-lg-0">
                    <!-- Item Details Content -->
                    <div class="item-details ov-hidden">
                        <h2 class="product-title">Animal Girl Painting</h2>

                        <p>Anefty, a one-of-a-kind trading card is an NFTs – you can't just replace it with any
                            others card. If you these different from fungible items, which are often the same as
                            each othes you have something. differ from fungible item
                        </p>

                        <div class="button-group style--two">
                            <a href="item-details.html" class="btn btn-border btn-sm"><img
                                    src="assets/img/icons/btn-buy-now-icon.svg" alt="" class="svg"> Buy Now</a>
                        </div>

                        <div class="row mb-4 mt-40 pt-1">
                            <div class="col-sm-6">
                                <!-- Creator -->
                                <a href="profile.html" class="hz-profile creator media mb-4 mb-sm-0">
                                    <div class="avatar">
                                        <img src="assets/img/media/creator-avatar.png" alt="">
                                    </div>
                                    <div class="content media-body">
                                        <h6>Creator</h6>
                                        <h5>Anehty_Yacht</h5>
                                    </div>
                                </a>
                                <!-- End Creator -->
                            </div>
                            <div class="col-sm-6">
                                <!-- Owner -->
                                <a href="profile.html" class="hz-profile owner media">
                                    <div class="avatar">
                                        <img src="assets/img/media/owner-avatar.png" alt="">
                                    </div>
                                    <div class="content media-body">
                                        <h6>Owner</h6>
                                        <h5>Cyber_Kongz</h5>
                                    </div>
                                </a>
                                <!-- End Owner -->
                            </div>
                        </div>

                        <!-- Tab Buttons -->
                        <ul class="nav tab-buttons style--two">
                            <li>
                                <button class="active" data-bs-toggle="tab" data-bs-target="#info">Info</button>
                            </li>
                        </ul>
                        <!-- End Tab Buttons -->

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info">
                                <!-- Info List -->
                                <ul class="info-list">
                                    <li>
                                        <h6>NFTs ID</h6>
                                        <h3>690563</h3>
                                    </li>
                                    <li>
                                        <h6>Mint Transactions</h6>
                                        <h3>69b9ebde0178k7O7&export</h3>
                                    </li>
                                    <li>
                                        <h6>Contact Address</h6>
                                        <h3>kɒngtækt əˈdrɛs</h3>
                                    </li>
                                </ul>
                                <!-- End Info List -->
                            </div>
                            <div class="tab-pane fade" id="bids">
                                <p>No active bids yet. Be the first to make a bid!</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Details Content -->
                </div>
                <div class="col-xl-5 col-lg-6 order-0 order-lg-1">
                    <!-- Item Details IMG -->
                    <div class="item-details-img mb-5 mb-lg-0">
                        <img src="assets/img/media/item-details.png" alt="">
                    </div>
                    <!-- End Item Details IMG -->
                </div>
            </div>
        </div>
    </section>
<!-- End Item Details -->
@endsection

