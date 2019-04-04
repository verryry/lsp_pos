@extends('inventory.layouts.app')

@section('content')
  <form class="form-horizontal" action="{{ route('profile.update',$profile->id) }}" enctype="multipart/form-data" method="post">
    @csrf
    {{ method_field('PUT') }}
    <fieldset>
      <div class="form-group">
        <label for="nama_koperasi" class="col-lg-2 control-label">Nama</label>
        <div class="col-lg-10">
          <input type="text" name="nama_koperasi" class="form-control" id="nama_koperasi" placeholder="Nama Koperasi" value="{{ $profile->nama_koperasii }}">
        </div>
      </div>
      <div class="form-group">
        <label for="alamat_koperasi" class="col-lg-2 control-label">Alamat</label>
        <div class="col-lg-10">
          <input type="text" name="alamat_koperasi" class="form-control" id="alamat_koperasi" placeholder="Alamat" value="{{ $profile->alamat_koperasi }}">
        </div>
      </div>
      <div class="form-group">
        <label for="telepon" class="col-lg-2 control-label">Telepon</label>
        <div class="col-lg-10">
          <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Telepon" value="{{ $profile->telepon }}">
        </div>
      </div>
      <div class="form-group">
        <label for="kode_pos" class="col-lg-2 control-label">Kode Pos</label>
        <div class="col-lg-10">
          <input type="text" name="kode_pos" class="form-control" id="kode_pos" placeholder="Kode Pos" value="{{ $profile->kode_pos }}">
        </div>
      </div>
      <div class="form-group">
        <label for="keterangan" class="col-lg-2 control-label">Keterangan</label>
        <div class="col-lg-10">
          <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Kode Pos">{{ $profile->keterangan }}</textarea>
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
          <a href="{{ route('barang-masuk.index') }}" type="reset" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
@endsection
