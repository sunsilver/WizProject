@extends('layouts.app')
@section('title', 'title name')
@section('style')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card card0 border-0">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card1 pb-5">
                            <div class="row"> <img src="https://i.imgur.com/CXQmsmF.png" class="logo"> </div>
                            <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img
                                    src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row mb-4 px-3">
                                    <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                                    <div class="facebook text-center mr-3">
                                        <i class='bx bxl-facebook-circle'></i>
                                    </div>
                                    <div class="twitter text-center mr-3">
                                        <i class='bx bxl-google'></i>
                                    </div>
                                    <div class="linkedin text-center mr-3">
                                        <i class='bx bxl-github'></i>
                                    </div>
                                </div>
                                <div class="row px-3"> 
                                    <label for="email" class="mb-1"><h6 class="mb-0 text-sm">{{ __('E-Mail Address') }}</h6></label> 
                                    <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address" value="{{ old('email') }}" required autocomplete="email" autofocus>  
                                </div>
                                <div class="row px-3 mb-4">
                                    <a href="{{ route('login') }}" class="ml-auto mb-0 text-sm">{{ __('Login Page') }}</a>
                                </div>
                                <div class="row mb-3 px-3"> 
                                    <button type="submit" class="btn btn-blue text-center">{{ __('Send Password Reset Link') }}</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

@endsection