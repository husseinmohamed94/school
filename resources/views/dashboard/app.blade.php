<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'school') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.ss') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fawsome.min.css') }}" rel="stylesheet">

@if( app()->getLocale() == 'ar')

<link href="{{ asset('css/bootstrap_ar.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/style_ar.css') }}" rel="stylesheet">

@endif
</head>
<body>
    <div id="app">
        

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'school') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
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



        <main class="py-4 container">     
                <div class="container-fliud text-center">
                        <div class="row">
                               <div class="col-lg-3">
                                        <div class=" meun w-100" >
                                                <ul class="nav flex-column bg-dark">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="{{route('student.index')}}">{{__('student.student')}}</a>
                                                        
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('class.index')}}">{{__('class.class')}}</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('Rows.index')}}">{{__('row.row')}}</a>
                                                    </li>
                                                   
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('student.index')}}">Link</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link</a>
                                                    </li>
                                                    
                                                    </ul>
                                            </div>
                               </div> 
                       
                <div class="col-lg-9 cont">
                @yield('content')

                         </div>
                     </div>
                </div>

        </main>


      @yield('scripts')
        <script src="{{ asset('js/jquery-3.4.1.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/popper.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
    </div>
</body>


</html>
