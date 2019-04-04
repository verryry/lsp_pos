@extends('inventory.layouts.baranglayout')

@section('content')
  <form class="form-horizontal" action="{{ route('barang-masuk.updateKeluar',$barang->id) }}" enctype="multipart/form-data" method="post">
    @csrf
    <fieldset>
      <div class="form-group">
        <div class="col-lg-10">
          <input type="hidden" name="nama" class="form-control" id="nama" placeholder="Nama" value="{{ $barang->nama }}">
        </div>
      </div>
      <div class="form-group">
        <label for="jumlah_keluar" class="col-lg-2 control-label">Jumlah Keluar</label>
        <div class="col-lg-10">
          <input type="number" min="0" name="jumlah_keluar" class="form-control" id="jumlah_keluar" placeholder="Jumlah Keluar" >
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10">
          <input type="hidden" name="via" class="form-control" id="via" placeholder="Via" value="{{ $barang->via }}">
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
