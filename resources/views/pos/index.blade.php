@extends('pos.app')

@section('content')
<a href="{{ route('pos.create') }}" class="btn btn-primary">Tambah</a>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> POS Sementara</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">

                <th>
                  Nama
                </th>
                <th>
                  Qty
                </th>
                <th>
                  Harga
                </th>
                <th>
                  Tanggal
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                @foreach($ts as $tran)
                <tr>
                  <td>
                    {{ $tran->nama}}
                  </td>
                  <td>
                    {{$tran->jumlah}} {{$tran->unit}}
                  </td>
                  <td>
                    Rp. {{$tran->harga}}
                  </td>
                  <td>
                    {{$tran->created_at}}
                  </td>
                  <td>
                      <form action="{{ route('pos.destroy', $tran->id)}}" method="POST" style="display:inline-block !important;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger btn-rounded" value="Delete"/>
                      </form>
                      <a href="" class="btn btn-primary btn-rounded" name="button">Keluar</a>
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
