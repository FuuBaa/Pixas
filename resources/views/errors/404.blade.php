@extends('layouts.app')
@yield('title','404')
  @section('content')
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
                                    <h2>Janji ga Sedih 😭☝️</h2>
                                    <a href="{{route('home')}}"">
                                        <img src="assets/img/icons/btn-home.svg" class="svg" alt="">
                                        Back Home
                                    </a>
                                </div>
                                <div class="content-404-right">
                                    <h4>Ini hanya kesalahan 404...!</h4>
                                    <p>Halaman yang kamu cari tidak tersedia sekarang, 
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
@section('content')