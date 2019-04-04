@extends('inventory.layouts.baranglayout')

@section('content')
<!-- <a href="{{route('barang-keluar.create') }}" class="btn btn-primary">Tambah</a> -->
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Barang Keluar</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Nama
                </th>
                <th>
                  Jumlah
                </th>
                <th>
                  Status
                </th>
                <th>
                  Via
                </th>
                <th>
                  Tanggal Pengiriman
                </th>
                <!-- <th>
                  Action
                </th> -->
              </thead>
              <tbody>
                @foreach ($barang as $barangs)
                <tr>
                  <td>
                    {{ $barangs->id }}
                  </td>
                  <td>
                    {{ $barangs->nama }}
                  </td>
                  <td>
                    {{ $barangs->jumlah_keluar }}
                  </td>
                  <td>
                    {{ $barangs->status }}
                  </td>
                  <td>
                    {{ $barangs->via }}
                  </td>
                  <td>
                    {{ $barangs->created_at }}
                  </td>
                  <!-- <td>
                    <a href="{{ route('barang-masuk.edit',$barangs->id) }}" class="btn btn-warning btn-rounded" name="button">Edit</a>
                      <form action="{{ route('barang-masuk.destroy',$barangs->id) }}" method="POST" style="display:inline-block !important;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger btn-rounded" value="Delete"/>
                      </form>
                  </td> -->
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
