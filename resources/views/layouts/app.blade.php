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


</head>
<body>
    <div id="app">
      

<!--navber-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<div class="container-fluid">

    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="imags/log h.png" alt="" style="height: 35px;width: 35px;padding-right;5px:">
                    {{ config('app.name', 'school') }}

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                courses
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="https://www.youtube.com/channel/UC6AzOI3RSOq0VDUYZ9s-reg?view_as=subscriber" target="_blank" >C++</a>
                <a class="dropdown-item"href="https://www.youtube.com/channel/UC6AzOI3RSOq0VDUYZ9s-reg?view_as=subscriber" target="_blank">jave </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://www.youtube.com/channel/UC6AzOI3RSOq0VDUYZ9s-reg?view_as=subscriber" target="_blank">Html</a>
                <a class="dropdown-item" href="https://www.youtube.com/channel/UC6AzOI3RSOq0VDUYZ9s-reg?view_as=subscriber" target="_blank">Css</a>
                <a class="dropdown-item" href="https://www.youtube.com/channel/UC6AzOI3RSOq0VDUYZ9s-reg?view_as=subscriber" target="_blank">javescript</a>
                <a class="dropdown-item" href="https://www.youtube.com/channel/UC6AzOI3RSOq0VDUYZ9s-reg?view_as=subscriber" target="_blank">J-Query</a>
                <a class="dropdown-item" href="https://www.youtube.com/channel/UC6AzOI3RSOq0VDUYZ9s-reg?view_as=subscriber" target="_blank">Bootstarp</a>
                <a class="dropdown-item" href="https://www.youtube.com/channel/UC6AzOI3RSOq0VDUYZ9s-reg?view_as=subscriber" target="_blank">MySql</a>
                <a class="dropdown-item" href="https://www.youtube.com/channel/UC6AzOI3RSOq0VDUYZ9s-reg?view_as=subscriber" target="_blank">PHP</a>
            </div>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item">
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
         

      </ul>
      <form class="form-inline my-2 my-lg-0" style="margin-right: 10px;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>


     @guest
           <form class="form-inline my-2 my-lg-0" >
            <button class="btn btn-outline-info my-2 my-sm-0" type="button" data-toggle="modal" data-target="#exampleModal">{{ __('Login') }}

            </button>
              </form>
           @if (Route::has('register'))
                 <form class="form-inline my-2 my-lg-0">
                 <a href="{{ route('register') }}" class="btn btn-outline-info my-2 my-sm-0"  type="button">
                  {{ __('Register') }}
                </a>
              </form>
          @endif
             @else
           <ul class="navbar-nav ml-auto">

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

<!--end navber-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
         <form method="POST" action="{{ route('login.custom') }}">
               @csrf 


                    <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-describedby="emailHelp"> 
                              @error('email')
                                     <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </span>
                              @enderror
                     </div>
             <div class="form-group">
                 <label for="exampleInputPassword1">Password</label>
                 <input type="password"  id="exampleInputPassword1"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
             </div>

                        <div class="form-group form-check">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="remember"  {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customSwitch1">  {{ __('Remember Me') }}</label>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                             <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">   {{ __('Login') }} </button>
                                     @if (Route::has('password.request'))
                                      <a class="btn btn-link" href="{{ route('password.request') }}">
                                             {{ __('Forgot Your Password?') }}
                                       </a>
                                     @endif
                             </div>
                        </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



 
</body>
</html>
