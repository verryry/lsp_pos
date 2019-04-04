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
          <a class="navbar-brand" href="{{ url('/inventory') }}">< &nbsp; Product</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
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
      <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah</a>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      Barcode
                    </th>
                    <th>
                      Product
                    </th>
                    <th>
                      Harga Jual
                    </th>
                    <th>
                      Harga Beli
                    </th>
                    <th>
                      Disc
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                      Stok
                    </th>
                    <th>
                      Unit
                    </th>
                    <th>
                      Curr
                    </th>
                    <th>
                      Kategori
                    </th>
                    <th>
                      Keterangan
                    </th>
                    <th>
                      Action
                    </th>
                  </thead>
                  <tbody>
                    @foreach ($product as $products)
                    <tr>
                      <td>
                        {{$products->id}}
                      </td>
                      <td>
                        {{$products->nama}}
                      </td>
                      <td>
                        {{$products->harga_jual}}
                      </td>
                      <td>
                        {{$products->harga_beli}}
                      </td>
                      <td>
                        {{$products->disc}}
                      </td>
                      <td>
                        {{$products->status}}
                      </td>
                      <td>
                        {{$products->stok}}
                      </td>
                      <td>
                        {{$products->id_unit}}
                      </td>
                      <td>
                        {{$products->id_curr}}
                      </td>
                      <td>
                        {{$products->id_kategori}}
                      </td>
                      <td>
                        {{$products->keterangan}}
                      </td>
                      <td>
                        <a href="{{ route('product.edit',$products->id)}}" class="btn btn-warning btn-rounded" name="button">Edit</a>
                          <form action="{{ route('product.destroy',$products->id)}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-danger btn-rounded" value="Delete"/>
                          </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
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
