@extends('inventory.layouts.app')

@section('content')
  <a href="{{route('persen-keuntungan.create') }}" class="btn btn-primary">Tambah</a>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Persen Keuntungan</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Persen Keuntungan
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                @foreach ($perken as $perkens)
                <tr>
                  <td>
                    {{ $perkens->id }}
                  </td>
                  <td>
                    {{ $perkens->persenjual }}
                  </td>
                  <td>
                    <a href="{{ route('persen-keuntungan.edit',$perkens->id) }}" class="btn btn-warning btn-rounded" name="button">Edit</a>
                      <form action="{{ route('persen-keuntungan.destroy',$perkens->id) }}" method="POST" style="display:inline-block !important;">
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
