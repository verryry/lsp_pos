@extends('master.layouts.app')

@section('content')
  <form class="form-horizontal" action="{{ route('users.store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <fieldset>
      <div class="form-group">
        <label for="name" class="col-lg-2 control-label">Nama</label>
        <div class="col-lg-10">
          <input type="text" name="name" class="form-control" id="name" placeholder="Nama">
        </div>
      </div>
      <div class="form-group">
        <label for="telp" class="col-lg-2 control-label">Telepon</label>
        <div class="col-lg-10">
          <input type="number" name="telp" class="form-control" id="telp" placeholder="Telepon">
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="text" name="email" class="form-control" id="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10">
          <input type="text" name="password" class="form-control" id="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="role" class="col-lg-2 control-label">Hak Ases</label>
        <div class="col-lg-10">
          <select class="form-control" name="role">
            <option selected="true" disabled="disabled">Chooise Role</option>
            <option value="SuperAdmin"> SuperAdmin</option>
            <option value="Admin"> Admin</option>
            <option value="Kasir"> Kasir</option>
          </select>
        </div>
      </div>
      <div>
        <label for="image" class="col-lg-2 control-label">Image</label>
        <div class="col-lg-10">
          <input class="form-control" name="image" type="file" value="{{ old('featured_image') }}"/>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <a href="{{ route('users.index') }}" type="reset" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
@endsection
