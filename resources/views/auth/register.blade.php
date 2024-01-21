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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> -->

                                <div class="col-md-6 offset-md-3">
                                    <input placeholder="@ masukan nama anda" style="font-family:Arial, FontAwesome"  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                                <div class="col-md-6 offset-md-3">
                                    <input placeholder="@ masukan email anda" style="font-family:Arial, FontAwesome" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <!-- <label for="posisi" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->

                                <div class="col-md-6 offset-md-3">
                                    <input placeholder="</> masukan posisi anda" style="font-family:Arial, FontAwesome" id="posisi" type="text" class="form-control @error('posisi') is-invalid @enderror" name="posisi" value="{{ old('posisi') }}" autocomplete="posisi">

                                    @error('posisi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                                <div class="col-md-6 password-field offset-md-3">
                                    <input placeholder="&#xF023; masukan password anda" style="font-family:Arial, FontAwesome" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        <i toggle2="#password" class="fa fa-fw fa-eye toggle-password2"></i>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> -->

                                <div class="col-md-6 password-field offset-md-3">
                                    <input placeholder="&#xF023; masukan ulang password anda" style="font-family:Arial, FontAwesome"  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <!-- <i toggle3="#password" class="fa fa-fw fa-eye toggle-password3"></i> -->
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-3 offset-md-3">
                                    <button type="submit" class="btn btn-danger btnloi">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-3">
                                <p class="text-center">Already have an account? <a class="linkk" href="{{ route('login') }}">Login</a></p>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 img-holder">
                    <div class="img-holder">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
