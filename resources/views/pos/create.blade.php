@extends('pos.app')

@section('content')
  <form class="form-horizontal" action="{{ route('pos.store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <fieldset>
      <div class="form-group">
        <label for="nama" class="col-lg-2 control-label">Nama</label>
        <div class="col-lg-10">
          <select class="form-control" name="nama">
            <option selected="true" disabled="disabled">Chooise Product</option>
            @foreach($p as $ps)
            <option value="{{ $ps->nama }}">- {{ $ps->nama }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="jumlah" class="col-lg-2 control-label">Jumlah</label>
        <div class="col-lg-10">
          <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah">
        </div>
      </div>
      <div class="form-group">
        <label for="unit" class="col-lg-2 control-label">Unit</label>
        <div class="col-lg-10">
          <input type="text" name="unit" class="form-control" id="unit" placeholder="Unit">
        </div>
      </div>
      <div class="form-group">
        <label for="harga" class="col-lg-2 control-label">Harga</label>
        <div class="col-lg-10">
          <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <a href="{{ route('pos.index') }}" type="reset" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
@endsection
