<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['profile'] = Profile::all();
      return view('master.profile.index',$data);
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
        //
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
        $data['profile'] = Profile::find($id);
        return view('master.profile.edit',$data);
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
      $data = Profile::find($id);
      if ($request->file('image') == "") {
        $data->image = $data->image;
      }else{
        $path = 'images';
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$ext;
        $file->move($path,$fileName);
        $data->image = $fileName;
      }
      $data->nama_koperasi = $request->nama_koperasi;
      $data->alamat_koperasi = $request->alamat_koperasi;
      $data->telepon = $request->telepon;
      $data->keterangan = $request->keterangan;
      $data->kode_pos = $request->kode_pos;
      $data->update();

      return redirect()->route('profile.index');
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
}
