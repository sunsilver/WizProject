@extends('layouts.app')
@section('title', 'ジョイン')
@section('style')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section( 'content')
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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row px-3"> 
                                    <label for="name" class="mb-1"><h6 class="mb-0 text-sm">{{ __('Name') }}</h6></label> 
                                    <input id="name" type="text" class="mb-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row px-3"> 
                                    <label for="email" class="mb-1"><h6 class="mb-0 text-sm">{{ __('email') }}</h6></label> 
                                    <input id="email" type="email" class="mb-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row px-3"> 
                                    <label for="password" class="mb-1"><h6 class="mb-0 text-sm">{{ __('password') }}</h6></label> 
                                    <input id="password" type="password" class="mb-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row px-3"> 
                                    <label for="password-confirm" class="mb-1"><h6 class="mb-0 text-sm">{{ __('password-confirm') }}</h6></label> 
                                    <input id="password-confirm" type="password" class="mb-4" name="password_confirmation" required autocomplete="new-password">
                                    @error('password-confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row px-3 mb-4">
                                    <a href="{{ route('login') }}" class="ml-auto mb-0 text-sm">{{ __('login page') }}</a>
                                </div>
                                <div class="row mb-3 px-3"> 
                                    <button type="submit" class="btn btn-blue text-center">{{ __('Regsiter') }}</button> 
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