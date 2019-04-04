@extends('master.layouts.app')

@section('content')
<a href="{{route('users.create') }}" class="btn btn-primary">Tambah</a>
<form action="{{ url('/inventory/category/search') }}" method="get">
  <div class="input-group no-border">
    <input type="text" value="{{ old('search') }}" name="search" class="form-control" placeholder="Search...">
    <div class="input-group-append">
      <div class="input-group-text">
        <i class="nc-icon nc-zoom-split"></i>
      </div>
    </div>
  </div>
</form>
  <div class="row">
      <!-- <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Data User</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Nama
                </th>
                <th>
                  Contact
                </th>
                <th>
                  Hak Akses
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                @foreach($user as $users)
                <tr>
                  <td>
                    {{ $users->name }}
                  </td>
                  <td>
                    {{ $users->telp }}
                  </td>
                  <td>
                    {{ $users->role }}
                  </td>
                  <td>
                    <a href="{{ route('users.edit' ,$users->id) }}" class="btn btn-warning btn-rounded" name="button">Edit</a>
                      <form action="{{ route('users.destroy' ,$users->id) }}" method="POST" style="display:inline-block !important;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger btn-rounded" value="Delete"/>
                      </form>
                  </td>
                  @endforeach
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div> -->
      @foreach($user as $users)
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">
            <img src="../assets/img/damir-bosnjak.jpg" alt="...">
          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="{{asset('images/'.$users->image)}}" alt="...">
                <h5 class="title">{{ $users->name }}</h5>
              </a>
              <p class="description">
                {{ $users->email }}
              </p>
            </div>
            <p class="description text-center">
              Contact : <br> {{ $users->telp }}
            </p>
          </div>
          <div class="card-footer">
            <hr>
            <div class="button-container">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                  <a href="{{ route('users.edit' ,$users->id) }}" class="btn btn-warning btn-rounded" name="button">Edit</a>
                </div>
                <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                  <form action="{{ route('users.destroy' ,$users->id) }}" method="POST" style="display:inline-block !important;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-danger btn-rounded" value="Delete"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
  </div>
@endsection
