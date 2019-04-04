@extends('inventory.layouts.app')

@section('content')
  <form class="form-horizontal" action="{{ route('curr.update',$curr->id) }}" enctype="multipart/form-data" method="post">
    @csrf
    {{ method_field('PUT') }}
    <fieldset>
      <div class="form-group">
        <label for="curr" class="col-lg-2 control-label">Curr</label>
        <div class="col-lg-10">
          <input type="text" name="curr" class="form-control" id="curr" placeholder="Curr" value="{{ $curr->curr }}">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <a href="{{ route('curr.index') }}" type="reset" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
@endsection
