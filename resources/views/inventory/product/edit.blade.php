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
            <a class="navbar-brand" href="#pablo">Product</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">

              </ul>
          </div>
        </div>
      </nav>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <form class="form-horizontal" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data" method="post">
                  @csrf
                  {{ method_field('PUT') }}

    <fieldset>
      <div class="form-group">
        <label for="nama" class="col-lg-2 control-label">Nama Product</label>
        <div class="col-lg-10">
          <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Product" value="{{ $product->nama }}">
        </div>
      </div>
      <div class="form-group">
        <label for="harga_jual" class="col-lg-2 control-label">Harga Jual</label>
        <div class="col-lg-10">
          <input type="number" min="0" name="harga_jual" class="form-control" id="harga_jual" placeholder="Harga Jual" value="{{ $product->harga_jual }}">
        </div>
      </div>
      <div class="form-group">
        <label for="harga_beli" class="col-lg-2 control-label">Harga Beli</label>
        <div class="col-lg-10">
          <input type="number" min="0" name="harga_beli" class="form-control" id="harga_beli" placeholder="Harga Beli" value="{{ $product->harga_beli }}">
        </div>
      </div>
      <div class="form-group">
        <label for="disc" class="col-lg-2 control-label">Diskon</label>
        <div class="col-lg-10">
          <input type="number" min="0" name="disc" class="form-control" id="disc" placeholder="Diskon" value="{{ $product->disc }}">
        </div>
      </div>
      <div class="form-group">
        <label for="status" class="col-lg-2 control-label">Status</label>
        <div class="col-lg-10">
          <input type="text" name="status" class="form-control" id="status" placeholder="Status" value="{{ $product->status }}">
        </div>
      </div>
      <div class="form-group">
        <label for="stok" class="col-lg-2 control-label">Stok</label>
        <div class="col-lg-10">
          <input type="number" min="0" name="stok" class="form-control" id="stok" placeholder="Stok" value="{{ $product->stok }}">
        </div>
      </div>
      <div class="form-group">
        <label for="id_unit" class="col-lg-2 control-label">Unit</label>
        <div class="col-lg-10">
          <select class="form-control" name="id_unit">
            <option selected="true" value="{{$product->id_unit}}">{{$product->id_unit}}</option>
            @foreach($unit as $units)
            <option value="{{ $units->unit }}">- {{ $units->unit }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="id_curr" class="col-lg-2 control-label">Curr</label>
        <div class="col-lg-10">
          <select class="form-control" name="id_curr">
            <option selected="true" value="{{$product->id_curr}}">{{$product->id_curr}}</option>
            @foreach($curr as $currs)
            <option value="{{ $currs->curr }}">- {{ $currs->curr }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="id_kategori" class="col-lg-2 control-label">Kategori</label>
        <div class="col-lg-10">
          <select class="form-control" name="id_kategori">
            <option selected="true" value="{{$product->id_kategori}}">{{$product->id_kategori}}</option>
            @foreach($kategori as $kategoris)
            <option value="{{ $kategoris->kat }}">- {{ $kategoris->kat }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="keterangan" class="col-lg-2 control-label">Katerangan</label>
        <div class="col-lg-10">
          <textarea style="height:auto !important;" class="form-control" rows="10" name="keterangan" placeholder="Keterangan">{{$product->keterangan}}</textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <a href="{{ route('product.index') }}" type="reset" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
