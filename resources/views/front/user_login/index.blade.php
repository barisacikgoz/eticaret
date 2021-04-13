@extends('front.layouts.master')
@section('title')
    <title>Üye Giriş Sayfası - Üye Ol</title>
@endsection
@section('front.content')
    <div class="section">
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Login | Register</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> Login | Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-margin">
        <div class="container">
            <div class="row mb-n10">
                <div class="col-lg-5 col-md-8 m-auto m-lg-0 pb-10">
                    <div class="login-wrapper">
                        <div class="section-content text-center mb-5">
                            <h2 class="title mb-2">Login</h2>
                            <p class="desc-content">Please login using account detail bellow.</p>
                        </div>

                        <form action="{{ route('user.login.post') }}" method="post">
                            @csrf
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    {{ $errors->first() }}
                                </div>
                            @endif
                            <div class="single-input-item mb-3">
                                <input type="email" placeholder="Email or Username" name="email">
                            </div>

                            <div class="single-input-item mb-3">
                                <input type="password" placeholder="Enter your Password" name="password">
                            </div>

                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                        </div>
                                    </div>
                                    <a href="#" class="forget-pwd mb-3">Forget Password?</a>
                                </div>
                            </div>

                            <div class="single-input-item mb-3">
                                <button class="btn btn btn-dark btn-hover-primary rounded-0">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 m-auto m-lg-0 pb-10">
                    <div class="register-wrapper">

                        <div class="section-content text-center mb-5">
                            <h2 class="title mb-2">Create Account</h2>
                            <p class="desc-content">Please Register using account detail bellow.</p>
                        </div>

                        <form action="{{ route('account.store') }}" method="post">
                            @csrf
                            <div class="row">

                                <div class="col-6">
                                    <div class="single-input-item mb-3">
                                        <input type="text" placeholder="First Name" name="first_name">
                                    </div>

                                    <div class="single-input-item mb-3">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>

                                    <div class="single-input-item mb-3">
                                        <input type="text" placeholder="Company" name="company">
                                    </div>

                                    <div class="single-input-item mb-3">
                                        <input type="text" placeholder="City" name="city">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="single-input-item mb-3">
                                        <input type="text" placeholder="Last Name" name="last_name">
                                    </div>

                                    <div class="single-input-item mb-3">
                                        <input type="text" placeholder="Phone" name="phone" maxlength="11">
                                    </div>

                                    <div class="single-input-item mb-3">
                                        <input type="text" placeholder="Address" name="address">
                                    </div>

                                    <div class="single-input-item mb-3">
                                        <input type="text" placeholder="District" name="district">
                                    </div>
                                </div>

                                <div class="single-input-item mb-3">
                                    <input type="text" placeholder="Post Code" name="post_code" maxlength="5">
                                </div>

                                <div class="single-input-item mb-3">
                                    <input type="password" placeholder="Password" name="password">
                                </div>
                            </div>

                            <div class="single-input-item mb-3">
                                <button type="submit" class="btn btn btn-dark btn-hover-primary rounded-0">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
