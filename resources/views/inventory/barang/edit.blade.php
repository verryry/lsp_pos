@extends('inventory.layouts.baranglayout')

@section('content')
  <form class="form-horizontal" action="{{ route('barang-masuk.update',$barang->id) }}" enctype="multipart/form-data" method="post">
    @csrf
    {{ method_field('PUT') }}
    <fieldset>
      <div class="form-group">
        <label for="nama" class="col-lg-2 control-label">Nama</label>
        <div class="col-lg-10">
          <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="{{ $barang->nama }}">
        </div>
      </div>
      <div class="form-group">
        <label for="jumlah" class="col-lg-2 control-label">Jumlah</label>
        <div class="col-lg-10">
          <input type="number" min="0" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah" value="{{ $barang->jumlah }}">
        </div>
      </div>
      <div class="form-group">
        <label for="via" class="col-lg-2 control-label">Via</label>
        <div class="col-lg-10">
          <input type="text" name="via" class="form-control" id="via" placeholder="Via" value="{{ $barang->via }}">
        </div>
      </div>
      <div class="form-group">
        <label for="status" class="col-lg-2 control-label">Status</label>
        <div class="col-lg-10">
          {{-- <input type="text" name="status" class="form-control" id="status" placeholder="Status" value="{{ $barang->status }}"> --}}
          <select class="form-control" name="status">
            <option selected="true" value="{{ $barang->status}}">{{ $barang->status}}</option>
            {{-- @foreach($unit as $units) --}}
            <option value="tersedia">- Tersedia</option>
            <option value="kosong">- Kosong</option>
            {{-- @endforeach --}}
          </select>
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
