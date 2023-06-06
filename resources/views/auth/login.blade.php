@extends('layouts.app')

@section('content')
<div class="container-fluid px-5 d-none d-lg-block">
    <div class="row gx-5 py-3 align-items-center">
        <div class="col-lg-3">
            <div class="d-flex align-items-center justify-content-start">
                <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                <h2 class="mb-0"></h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="d-flex align-items-center justify-content-center">
                <a href="" class="navbar-brand ms-lg-5">
                    <h1 class="m-0 display-4 text-primary" ><span class="text" style="color: #281e09"></span></h1>
                </a>
            </div>
        </div>
       
    </div>
</div>
<div class="container " >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="color:rgb(225, 225, 225);font-size: 16px">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="color:rgb(232, 232, 232);font-size: 17px">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary bg-success">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <strong>
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color:orange">
                                        {{ __('Forgot Your Password?') }}
                                    </a></strong>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<style>

</style>
@endsection

