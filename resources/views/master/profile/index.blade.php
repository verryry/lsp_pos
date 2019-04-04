@extends('master.layouts.app')

@section('content')
<form action="{{ url('/inventory/category/search') }}" method="get">
  <div class="input-group no-border">
  </div>
</form>
  <div class="row">
      @foreach($profile as $profiles)
      <div class="col-md-4">
        <div class="card card-user">
          <div class="image">
            <img src="../assets/img/damir-bosnjak.jpg" alt="...">
          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="{{asset('images/'.$profiles->image)}}" alt="...">
                <h5 class="title">{{ $profiles->nama_koperasi }}</h5>
              </a>
              <p class="description">
                {{ $profiles->alamat_koperasi }}
              </p>
            </div>
            <p class="description text-center">
              Contact : <br> {{ $profiles->telepon }}
            </p>
          </div>
          <div class="card-footer">
            <hr>
            <div class="button-container">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                  <a href="{{ route('profile.edit' ,$profiles->id) }}" class="btn btn-warning btn-rounded" name="button">Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
  </div>
@endsection
