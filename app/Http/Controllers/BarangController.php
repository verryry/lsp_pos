<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Barang;
use App\Model\BarangKeluar;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['barang'] = Barang::where('status','masuk')->get();
        return view('inventory.barang.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input['nama'] = $request->nama;
        $input['jumlah'] = $request->jumlah;
        $input['status'] = $request->status;
        $input['via'] = $request->via;
        Barang::create($input);

        return redirect()->route('barang-masuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['barang'] = Barang::find($id);
        return view('inventory.barang.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Barang::find($id);

        $data->nama = $request->nama;
        $data->jumlah = $request->jumlah;
        $data->status = $request->status;
        $data->via = $request->via;
        $data->update();

        return redirect()->route('barang-masuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Barang::find($id);
        $data->delete();

        return redirect()->route('barang-masuk.index');
    }

    public function keluar($id)
    {
      $data['barang'] = Barang::find($id);
      return view('inventory.barang.keluar',$data);
    }
    public function updateKeluar(Request $request,$id)
    {
      

      $data = Barang::find($id);
      if($data->jumlah -= $request->jumlah_keluar){
         $data->nama = $request->nama;
         $data->via = $request->via;
         $data->status = 'masuk';
         $data->update();

        $input['nama'] = $request->nama;
        $input['jumlah_keluar'] = $request->jumlah_keluar;
        $input['via'] = $request->via;
        $input['status'] = 'keluar';
      BarangKeluar::create($input);
    }
      return redirect()->route('barang-masuk.index');
    }
}
