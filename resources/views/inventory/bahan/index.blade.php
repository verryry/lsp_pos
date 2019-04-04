@extends('inventory.layouts.app')

@section('content')
  <a href="{{route('bahan.create') }}" class="btn btn-primary">Tambah</a>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Bahan</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Bahan
                </th>
                <th>
                  Satuan
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                @foreach ($bahan as $bahans)
                <tr>
                  <td>
                    {{ $bahans->id }}
                  </td>
                  <td>
                    {{ $bahans->nama_bahan }}
                  </td>
                  <td>
                    {{ $bahans->satuan }}
                  </td>
                  <td>
                    <a href="{{ route('bahan.edit',$bahans->id) }}" class="btn btn-warning btn-rounded" name="button">Edit</a>
                      <form action="{{ route('bahan.destroy',$bahans->id) }}" method="POST" style="display:inline-block !important;">
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
