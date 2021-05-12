{{-- <nav class="navbar navbar-expand-lg navbar-light bg-d">
        <a class="nav-brand active" aria-current="page" href="/api/home" style="padding:0">
            <img src="../img/nutc-logo.png" height="60.8px"></a>
        <ul class="nav justify-content-end">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item text-center px-3">
                <a class="a-col" href="/api/clubs">社團總覽</a>
            </li>
            <li class="nav-item text-center px-3">
                <a class="a-col" href="u_my club.html">我的社團</a>
            </li>
            <li class="nav-item text-center px-3">
                <a class="a-col" href="/api/clubOfnews">最新消息</a>
            </li>
            <li class="nav-item text-center px-3">
                <a class="a-col" href="u_apply_club.html">創建社團</a>
            </li>
        </ul>
            </div>
            <li class="dropstart">
                <a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="img-thumbnail"
                        style="padding: 0.1rem; background-color:#F8F8F6; border-radius:10rem; max-width:45.5px;"
                        src="../img/head.jpg">
                </a>
                <div class="dropdown-menu" style="padding: 0;border: 0;background:none;">
                    <div class="main_style_2 m-0">
                        <div class="outer-round">
                            <div class="border-round">
                                <div class="round2"></div>
                            </div>
                        </div>
                        <h3 class="head2">郭郭郭</h3>
                        <div class="white">
                            <table style="margin:0 auto;border: 0;">
                                <tr>
                                    <th>學號：</th>
                                    <th>1110000000</th>
                                </tr>
                                <tr>
                                    <th>電話：</th>
                                    <th>0900-000-000</th>
                                </tr>
                                <tr>
                                    <th>Email：</th>
                                    <th>club123@email.com</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </li>
            <div class="nav-item dropstart">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false"></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item dark text-center" href="#">後台</a></li>
                    <li><a class="dropdown-item dark text-center" href="#">登出</a></li>
                </ul>
            </div>
        </ul>

    </nav> --}}


    {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav> --}}

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">about</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/services">services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">我的社團</a>
                </li>
             
                </ul>
    
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="/home">後台</a>
                </li>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>