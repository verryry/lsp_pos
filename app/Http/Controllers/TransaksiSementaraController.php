<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\TransaksiSementara as Ts;
use App\Model\Product as P;

class TransaksiSementaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        //
    }

    public function paymentsementarapos(Request $r){
		$new = new Ts;
		if (Ts::where('nama', $r->input('nama'))->exists()) {
			$a = Ts::where('nama', $r->input('nama'))->first();
			$a->jumlah = $a->jumlah + 1;
			$a->save();
			return back();
		}
		$harga = P::where('nama', $r->input('nama'))->value('hargajual');
		$unit = P::where('nama', $r->input('nama'))->value('unit');
		$new->nama = $r->input('nama');
		$new->harga = $harga;
		$new->unit = $unit;
		$new->jumlah = "1";

		$new->save();
		return back();
	}
}
