<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'THT') }}</title>

    <link rel="stylesheet" href="{{ ('/build/assets/css/custom.css') }}">
    <script src="{{ ('/build/assets/js/custom.js') }}"></script>
    <link rel="stylesheet" href="{{ ('/build/assets/libs/fontawesome/css/font-awesome.min.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @auth
        <div id="app">
            @auth
                <div class="d-flex align-items-start konten-login">
                    <div class="nav flex-column nav-pills side-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <h5 class="text-center juduul">
                            <a class="navbar-brand" href="{{ url('/home') }}">
                                <img src="{{ ('build/assets/img/cms-assets/Handbag.png')}}"/>
                            </a>
                            <b>
                                <label style="padding:10px;padding-right:20px;">SIMS Web App</label>
                                <a class="toggle-side" href="" >
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </a>
                            </b>
                        </h5>
                        <a class="linkk" href="{{ url('/products') }}">
                            <button class="nav-link " id="v-pills-produk-tab" data-bs-toggle="pill" data-bs-target="#v-pills-produk" type="button" role="tab" aria-controls="v-pills-produk" aria-selected="true"><img src="{{ ('build/assets/img/cms-assets/Package.png')}}"/> <label>Produk</label></button>
                        </a>
                        <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="{{ ('build/assets/img/cms-assets/User.png')}}"/> <label>Profile</label></button>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <button style="width:100%;" class="nav-link" id="v-pills-logout-tab" data-bs-toggle="pill" data-bs-target="#v-pills-logout" type="button" role="tab" aria-controls="v-pills-logout" aria-selected="false"><img src="{{ ('build/assets/img/cms-assets/SignOut.png')}}"/> <label>{{ __('Logout') }} </label></button>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    
                    </div>
                    <div class="tab-content side-content" id="v-pills-tabContent">
                        <div class="tab-pane fade " id="v-pills-produk" role="tabpanel" aria-labelledby="v-pills-produk-tab">
                        </div>
                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            
                        
                                @guest
                        
                                @else
                                                
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12 py-3">
                                                <img src="{{ ('build/assets/img/cms-assets/Frame-98700.png')}}"/>
                                            </div>
                                            <div class="col-md-12 py-3">
                                                <h2><b>{{ Auth::user()->name }}</b></h2>
                                            </div>
                                            <div class="col-md-12 py-3">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="row mb-6">
                                                    <label for="email" class="col-md-6 col-form-label">{{ __('Nama Kandidat') }}</label>
                                                    <label for="password" class="col-md-6 col-form-label">{{ __('Posisi Kandidat') }}</label>

                                                </div>

                                                <div class="row mb-6">

                                                    <div class="col-md-6 namaprof">
                                                        <input style="padding-left:40px;font-family:Arial, FontAwesome" id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
                                                        <span toggle="#namaprof" class="toggle-namaprof">{{ __('@') }}</span>
                                                    </div>
                                                    <div class="col-md-6 posisipro">
                                                        <input style="padding-left:40px;font-family:Arial, FontAwesome" id="posisi" type="text" class="form-control" name="posisi"  value="{{ Auth::user()->posisi }}">
                                                        <!-- <i toggle="#password" class="fa fa-fw fa-eye toggle-password"></i> -->
                                                        <span toggle="#posisipro" class="toggle-posisipro">{{ __('</>') }}</span>
                                                    </div>
                                                </div>


                                            </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                        
                                @endguest
                        </div>
                        <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab"></div>
                    </div>
                </div>

                <!-- <main class="py-4">
                    @yield('content')
                </main> -->
            @else
                <!-- <main class=""> -->
                @yield('content')
                <!-- </main> -->
            @endauth
                    

        </div>
    @else
        @yield('content')
    @endauth
              
</body>
</html>
