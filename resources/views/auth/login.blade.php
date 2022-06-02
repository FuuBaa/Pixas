@extends('layouts.auth')
@section('content')
                <div class="col-xl-5 col-lg-7 col-md-10">
                    <!-- Card -->
                    <div class="card login-register-card">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <h2>Login</h2>
                                <p>Don't have an account yet? <a href="{{route('register')}}" class="c1">Register Now!</a>
                                </p>
                            </div>

                            <form method="POST" action="{{route('login')}}">
                            @csrf
                                <div class="form-group">
                                    <label for="email" class="mb-2">Email Address</label>
                                    <input type="email" id="email" class="form-control" placeholder="anefty@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="mb-2">Password</label>
                                    <input type="password" id="password" class="form-control">
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
@endsection
