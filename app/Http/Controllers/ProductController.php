<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Unit;
use App\Model\Curr;
use App\Model\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product'] = Product::all();
        return view('inventory.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kategori'] = Category::all();
        $data['unit'] = Unit::all();
        $data['curr'] = Curr::all();
        return view('inventory.product.create',$data);
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
        $input['harga_jual'] = $request->harga_jual;
        $input['harga_beli'] = $request->harga_beli;
        $input['disc'] = $request->disc;
        $input['status'] = $request->status;
        $input['stok'] = $request->stok;
        $input['keterangan'] = $request->keterangan;
        $input['id_unit'] = $request->id_unit;
        $input['id_curr'] = $request->id_curr;
        $input['id_kategori'] = $request->id_kategori;

        Product::create($input);

        return redirect()->route('product.index');
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
      $data['product'] = Product::find($id);
      $data['kategori'] = Category::all();
      $data['unit'] = Unit::all();
      $data['curr'] = Curr::all();
      return view('inventory.product.edit',$data);
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
      $data = Product::findOrFail($id);
      $data->nama = $request->nama;
      $data->harga_jual = $request->harga_jual;
      $data->harga_beli = $request->harga_beli;
      $data->disc = $request->disc;
      $data->status = $request->status;
      $data->stok = $request->stok;
      $data->keterangan = $request->keterangan;
      $data->id_unit = $request->id_unit;
      $data->id_curr = $request->id_curr;
      $data->id_kategori = $request->id_kategori;
      $data->update();

      return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Product::findOrFail($id);
      $data->delete();
      return redirect()->route('product.index');
    }
}
