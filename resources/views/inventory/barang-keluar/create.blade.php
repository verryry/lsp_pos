@extends('inventory.layouts.app')
<a href="{{route('barang-masuk.create') }}" class="btn btn-primary">Tambah</a>

@section('content')
  <form class="form-horizontal" action="{{ route('barang-masuk.store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <fieldset>
      <input type="hidden" name="status" value="tersedia">
      <div class="form-group">
        <label for="nama" class="col-lg-2 control-label">Nama</label>
        <div class="col-lg-10">
          <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
        </div>
      </div>
      <div class="form-group">
        <label for="jumlah" class="col-lg-2 control-label">Jumlah</label>
        <div class="col-lg-10">
          <input type="number" min="0" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah">
        </div>
      </div>
      <div class="form-group">
        <label for="via" class="col-lg-2 control-label">Via</label>
        <div class="col-lg-10">
          <input type="text" name="via" class="form-control" id="via" placeholder="Via">
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
