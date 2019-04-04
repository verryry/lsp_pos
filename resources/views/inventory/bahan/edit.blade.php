@extends('inventory.layouts.app')

@section('content')
  <form class="form-horizontal" action="{{ route('bahan.update',$bahan->id) }}" enctype="multipart/form-data" method="post">
    @csrf
    {{ method_field('PUT') }}
    <fieldset>
      <div class="form-group">
        <label for="nama_bahan" class="col-lg-2 control-label">Bahan</label>
        <div class="col-lg-10">
          <input type="text" name="nama_bahan" class="form-control" id="nama_bahan" placeholder="Nama Bahan" value="{{ $bahan->nama_bahan }}">
        </div>
      </div>
      <div class="form-group">
        <label for="satuan" class="col-lg-2 control-label">Satuan</label>
        <div class="col-lg-10">
          <input type="text" name="satuan" class="form-control" id="satuan" placeholder="Satuan" value="{{ $bahan->satuan }}">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <a href="{{ route('bahan.index') }}" type="reset" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
@endsection
