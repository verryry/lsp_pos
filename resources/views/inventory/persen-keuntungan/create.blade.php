@extends('inventory.layouts.app')

@section('content')
  <form class="form-horizontal" action="{{ route('persen-keuntungan.store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <fieldset>
      <div class="form-group">
        <label for="persen-keuntungan" class="col-lg-2 control-label">Persen Keuntungan</label>
        <div class="col-lg-10">
          <input type="text" name="persenjual" class="form-control" id="persenjual" placeholder="Persen Keuntungan">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <a href="{{ route('persen-keuntungan.index') }}" type="reset" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
@endsection
