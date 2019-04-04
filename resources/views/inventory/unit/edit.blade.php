@extends('inventory.layouts.app')

@section('content')
  <form class="form-horizontal" action="{{ route('unit.update',$unit->id) }}" enctype="multipart/form-data" method="post">
    @csrf
    {{ method_field('PUT') }}
    <fieldset>
      <div class="form-group">
        <label for="unit" class="col-lg-2 control-label">Curr</label>
        <div class="col-lg-10">
          <input type="text" name="unit" class="form-control" id="unit" placeholder="Curr" value="{{ $unit->unit }}">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <a href="{{ route('unit.index') }}" type="reset" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
@endsection
