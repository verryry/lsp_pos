@extends('inventory.layouts.app')

@section('content')
  <form class="form-horizontal" action="{{ route('category.update',$kat->id) }}" enctype="multipart/form-data" method="post">
    @csrf
    {{ method_field('PUT') }}
    <fieldset>
      <div class="form-group">
        <label for="kat" class="col-lg-2 control-label">Kategori</label>
        <div class="col-lg-10">
          <input type="text" name="kat" class="form-control" id="kat" placeholder="Kategori" value="{{ $kat->kat }}">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <a href="{{ route('category.index') }}" type="reset" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
@endsection
