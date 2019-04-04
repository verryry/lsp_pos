<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Profile;
use Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = User::all();
        return view('master.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $featured_image = "";
        if ($request->hasFile('image')) {
          $path = 'images';
          $file = $request->image;
          $extension = $file->getClientOriginalExtension();
          $fileName = rand(1111,9999).".".$extension;
          $file->move($path, $fileName);
          $image = $fileName;
        }
      $input['name'] = $request->name;
      $input['telp'] = $request->telp;
      $input['email'] = $request->telp;
      $input['image'] = $image;
      $input['password'] = Hash::make($request->password);
      $input['role'] = $request->role;

      User::create($input);

      return redirect()->route('users.index');
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
        $data['user'] = User::find($id);
        return view('master.user.edit',$data);
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
        $data = User::find($id);
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

        $data->name = $request->name;
        $data->telp = $request->telp;
        $data->email = $request->email;
        if ($request->new_password == "") {
          $data->password = $data->password;
        }else{
          $data->password = Hash::make($request->new_password);
        }
        $data->role = $request->role;
        $data->update();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('users.index');
    }
}
