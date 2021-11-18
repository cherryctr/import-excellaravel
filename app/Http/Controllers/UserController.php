<?php

namespace App\Http\Controllers;

use App\UsersModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        ;
        $getUsers = UsersModels::all();
        $hitungUser = $getUsers->count();
        // dd($hitungUsers);
        return view('layout.user.index',compact('hitungUser','getUsers','userId'));
    }


    public function updates($id)
    {
        //
        $userId = UsersModels::findOrFail($id);
        return view('layout.user.index',compact('userId'));
  
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
     * @param  \App\UsersModels  $usersModels
     * @return \Illuminate\Http\Response
     */
    public function show(UsersModels $usersModels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UsersModels  $usersModels
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersModels $usersModels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsersModels  $usersModels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersModels $usersModels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsersModels  $usersModels
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersModels $usersModels)
    {
        //
    }

     // PROSES TAMBAH DATA USer
     public function prosestambahuser(Request $request)
    {
        //  $this->validate($request, [
          
        //     'judul'     => 'required',
        //     'status'   => 'required'
        // ]);

        //upload image
        $users = new UsersModels();
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->level = $request->get('level');
        $users->password = Hash::make($request->get('password'));

        
      
        $users->save();


       
        if($users){
            //redirect dengan pesan sukses
            return redirect()->route('users')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('users')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function hapusDataUser($id)
    {
        // echo $id; exit;
        $users = UsersModels::where('id',$id)->delete();

        if($users){
            //redirect dengan pesan sukses
            return redirect()->route('users')->with(['success' => 'Data Berhasil Di Update!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('users')->with(['error' => 'Data Gagal Di Update!']);
        }
    }
}
