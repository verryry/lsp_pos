@extends('inventory.layouts.app')

@section('content')
  <a href="{{route('curr.create') }}" class="btn btn-primary">Tambah</a>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Curr</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Curr
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                @foreach ($curr as $currs)
                <tr>
                  <td>
                    {{ $currs->id }}
                  </td>
                  <td>
                    {{ $currs->curr }}
                  </td>
                  <td>
                    <a href="{{ route('curr.edit',$currs->id) }}" class="btn btn-warning btn-rounded" name="button">Edit</a>
                      <form action="{{ route('curr.destroy',$currs->id) }}" method="POST" style="display:inline-block !important;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger btn-rounded" value="Delete"/>
                      </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
