@extends('layouts.auth')
@section('content')
                <div class="col-xl-10">
                    <!-- Card -->
                    <div class="card login-register-card">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <h2>Register New Account</h2>
                                <p>Already account yet? <a href="{{route('login')}}" class="c1">Login Now!</a></p>
                            </div>

                            <!-- Register Form -->
                            <form method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="mb-2">Name</label>
                                            <input type="text" id="name" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="mb-2">Email Address</label>
                                            <input type="email" id="email" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password" class="mb-2">Password</label>
                                            <input type="password" id="password" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="re-password" class="mb-2">Re-enter Password</label>
                                            <input type="password" id="password_confirma" class="form-control"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 pt-2">
                                        <button type="submit" class="btn"><img src="assets/img/icons/btn-login.svg"
                                                alt="" class="svg">{{ __('Register') }}</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Register Form -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
@endsection