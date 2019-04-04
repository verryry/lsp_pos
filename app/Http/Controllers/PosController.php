<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TransaksiSementara as Ts;
use App\Model\Product as P;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ts'] = Ts::all();
        return view('pos.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['p'] = P::all();
        return view('pos.create',$data);
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
        $input['harga'] = $request->harga;
        $input['unit'] = $request->unit;

        Ts::create($input);

        return redirect()->route('pos.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ts::find($id);
        $data->delete();
        return redirect()->route('pos.index');
    }
  }
//     function indexpaymentsementara() {
// 		$data['produks'] = P::all();
// 		$data['trans'] = Ts::all();
// 		$a = Ts::all();
// 		$sum = 0;
// 		foreach ($a as $key => $value) {
// 			$sum = $sum + ($value->harga * $value->jumlah);
// 		}
// 		$data['datatotal'] = $sum;
// 		return view('pos.index', $data);
// 	}
//
// 	function paymentsementarapos(Request $r){
// 		$new = new Ts;
// 		if (Ts::where('nama', $r->input('nama'))->exists()) {
// 			$a = Ts::where('nama', $r->input('nama'))->first();
// 			$a->jumlah = $a->jumlah + 1;
// 			$a->save();
// 			return back();
// 		}
// 		$harga = P::where('nama', $r->input('nama'))->value('harga_jual');
// 		$unit = P::where('nama', $r->input('nama'))->value('id_unit');
// 		$new->nama = $r->input('nama');
// 		$new->harga = $harga;
// 		$new->unit = $unit;
// 		$new->jumlah = "1";
//
// 		$new->save();
// 		return back();
// 	}
//
// 	function transaksi(Request $r){
// 		$transaksi = Ts::all();
// 		$transaksib['pos'] = Tb::all();
// 		$kodetransaksi = uniqid(10);
// 		foreach ($transaksi as $key => $value) {
// 			$barang = P::where('nama', $value->nama)->first();
// 			$barang->jumlah = $barang->jumlah - $value->jumlah;
// 			$transaksibeneran = new Tb;
// 			$transaksibeneran->kodetransaksi = "Pos-".$kodetransaksi;
// 			$transaksibeneran->nama = $value->nama;
// 			$transaksibeneran->jumlah = $value->jumlah;
// 			$transaksibeneran->unit = $value->unit;
// 			$transaksibeneran->harga = $value->harga;
// 			$transaksibeneran->hargatotal = $r->input('hargatotal');
//
// 			$barang->save();
// 			$transaksibeneran->save();
// 		}
// 		Ts::truncate();
//
// 		$pdf = PDF::loadView('pos.pdf', $transaksib);
// 		return $pdf->download('transaksi.pdf');
// 	}
//
// 	function deletepaymentsementarapos($id){
// 		$transsaksisementara = Ts::find($id);
// 		if (isset($transsaksisementara)) {
// 			$transsaksisementara->delete();
// 		}else{
// 			echo "ada kesalahan !";
// 		}
// 		return back();
// 	}
//
// 	function deletepaymentpos($id){
// 		$transaksibeneran = Tb::find($id);
// 		if (isset($transaksibeneran)) {
// 			$transaksibeneran->delete();
// 		}else{
// 			echo "ada kesalahan !";
// 		}
// 		return back();
// 	}
//
// 	function deletesemuapaymentpos(){
// 		Tb::truncate();
// 		return back();
// 	}
//
// 	function indexpos(){
// 		$data['pos'] = Tb::all();
// 		return view('pos.all', $data);
// 	}
// }
