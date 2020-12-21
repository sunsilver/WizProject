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
                            <div class="row"> <img src="{{ asset('img/wiz.jpg')}}" class="logo" style="width:150px;"> </div>
                            <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img
                                    src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card2 card border-0 px-4 py-5">
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
                                <div class="row px-3 mb-4">
                                    <div class="line"></div> 
                                    <small class="or text-center">Or</small>
                                    <div class="line"></div>
                                </div>
                                <div class="row px-3"> 
                                    <label class="mb-1"><h6 class="mb-0 text-sm">Email Address</h6></label>
                                    <input id="email" type="email" class="mb-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="row px-3"> 
                                    <label class="mb-1"> <h6 class="mb-0 text-sm">Password</h6> </label> 
                                    <input id="password" type="password" class="mb-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                </div>
                                <div class="row px-3 mb-4">
                                    <div class="custom-control custom-checkbox custom-control-inline"> 
                                        <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> 
                                        <label for="chk1" class="custom-control-label text-sm">Remember me</label> 
                                    </div> 
                                    <a href="{{ route('password.request') }}" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                                </div>
                                <div class="row mb-3 px-3"> 
                                    <button type="submit" class="btn btn-blue text-center">Login</button> 
                                </div>
                                <div class="row mb-4 px-3"> 
                                    <small class="font-weight-bold">Don't have an account? 
                                        <a href="{{ route('register') }}" class="text-danger ">Register</a>
                                    </small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}
@endsection

@section('script')

@endsection
