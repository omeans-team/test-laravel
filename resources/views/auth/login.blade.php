@extends('layouts.app')

@section('content')

<div class="out-wrapper">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 frm-inp">
                    <div class="inner-form">

                    <div class="row mb-0">
                            <div class="col-md-6 offset-md-3">
                            <h4 class="text-center juduul"><img src="{{ ('build/assets/img/cms-assets/Handbag2.png')}}"/><b> SIMS Web App</b></h4>

                            </div>
                        </div>
<div class="row mb-0">
    <div class="col-md-6 offset-md-3">
                    <h3 class="text-center"><b>Masuk atau buat akun untuk memulai</b></h3>
                    </div>
                </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                            <div class="col-md-6 offset-md-3">
                                <input placeholder="@ masukan email anda" style="font-family:Arial, FontAwesome" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                            <div class="col-md-6  offset-md-3 password-field">
                                <input placeholder="&#xF023; masukan password anda" style="font-family:Arial, FontAwesome" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <i toggle="#password" class="fa fa-fw fa-eye toggle-password"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-danger btnloi">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-3">
                            <p class="text-center">Need an account? <a class="linkk" href="{{ route('register') }}">Sign up</a></p>

                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="col-md-6 img-holder">
                    <div class="img-holder">
                        <!-- <img src="{{ ('img/user2-160x160.jpg') }}" > -->
                        <!-- <img height="100%" width="100%" src="{{ ('build/assets/img/cms-assets/Frame-98699.png')}}" /> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
