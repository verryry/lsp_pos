@extends('layouts.home')

@section('content')
<div class="wrapper">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
  <div class="main-panel" style="width:100% !important">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-toggle">
            <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <a class="navbar-brand" href="#pablo">Main Menu</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

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

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- <div class="panel-header panel-header-lg">

<canvas id="bigDashboardChart"></canvas>


</div> -->
    <div class="content">
      <div class="row">
        @if(Auth::user()->role == "SuperAdmin")
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <a href="{{ route('users.index') }}">
            <div class="card-body" style="text-align:left; !important">
              <div class="row">
                <div class="col-10 col-md-12">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category" style="font-size:22px;text-align:left; !important">Master</p>
                      <p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i> Open Now
              </div>
            </div>
            </a>
          </div>
        </div>
        @endif

        @if(Auth::user()->role == "SuperAdmin" || Auth::user()->role == "Admin")
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <a href="{{ url('/inventory')}}">
            <div class="card-body ">
              <div class="row">
                <div class="col-10 col-md-12">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-9">
                  <div class="numbers">
                    <p class="card-category" style="font-size:22px;text-align:left; !important">Inventory</p>
                      <p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i> Open Now
              </div>
            </div>
            </a>
          </div>
        </div>
        @endif

        @if(Auth::user()->role == "SuperAdmin" || Auth::user()->role == "Kasir")
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <a href="{{ route('pos.index') }}">
            <div class="card-body ">
              <div class="row">
                <div class="col-10 col-md-12">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-10">
                  <div class="numbers">
                    <p class="card-category" style="font-size:22px;text-align:left; !important">Point of Sale</p>
                      <p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i> Open Now
              </div>
            </div>
            </a>
          </div>
        </div>
        @endif

        @if(Auth::user()->role == "SuperAdmin" || Auth::user()->role == "Kasir")
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <a href="">
            <div class="card-body ">
              <div class="row">
                <div class="col-10 col-md-12">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-10">
                  <div class="numbers">
                    <p class="card-category" style="font-size:22px;text-align:left; !important">Laporan Kasir</p>
                      <p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i> Open Now
              </div>
            </div>
            </a>
          </div>
        </div>
        @endif
      </div>
    </div>
    <footer class="footer footer-black  footer-white ">
      <div class="container-fluid">
        <div class="row">
          <nav class="footer-nav">
            <ul>
              <li>
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
              </li>
            </ul>
          </nav>
          <div class="credits ml-auto">
            <span class="copyright">
              ©
              <script>
                document.write(new Date().getFullYear())
              </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
            </span>
          </div>
        </div>
      </div>
    </footer>
@endsection
