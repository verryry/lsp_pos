@extends('inventory.layouts.app')

@section('content')
<a href="{{route('category.create') }}" class="btn btn-primary">Tambah</a>
<form action="{{ route('search.category') }}" method="get">
  <div class="input-group no-border">
    <input type="text" value="{{ old('search') }}" name="search" class="form-control" placeholder="Search...">
    <div class="input-group-append">
      <div class="input-group-text">
        <i class="nc-icon nc-zoom-split"></i>
      </div>
    </div>
  </div>
</form>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Kategori</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Kategori
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                @foreach ($kategori as $kategoris)
                <tr>
                  <td>
                    {{ $kategoris->id }}
                  </td>
                  <td>
                    {{ $kategoris->kat }}
                  </td>
                  <td>
                    <a href="{{ route('category.edit', $kategoris->id) }}" class="btn btn-warning btn-rounded" name="button">Edit</a>
                      <form action="{{ route('category.destroy',$kategoris->id) }}" method="POST" style="display:inline-block !important;">
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
