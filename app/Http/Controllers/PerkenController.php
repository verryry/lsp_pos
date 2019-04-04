<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Perken;

class PerkenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['perken'] = Perken::all();
        return view('inventory.persen-keuntungan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.persen-keuntungan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input['persenjual'] = $request->persenjual;
      Perken::create($input);

      return redirect()->route('persen-keuntungan.index');
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
      $data['perken'] = Perken::find($id);
      return view('inventory.persen-keuntungan.edit',$data);
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
      $data = Perken::find($id);
      $data->persenjual = $request->persenjual;
      $data->update();

      return redirect()->route('persen-keuntungan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Perken::findOrFail($id);
        $data->delete();

        return redirect()->route('persen-keuntungan.index');
    }
}
