<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function show(Rumah $rumah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function edit(Rumah $rumah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rumah $rumah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rumah  $rumah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rumah $rumah)
    {
        //
    }


    public function prosestambahrumah(Request $request)
    {
        //  $this->validate($request, [
          
        //     'name'     => 'required',
        //     'email' => 'required'

        // ]);

        //upload image
        $rumah = new Rumah();
        $rumah->nama = $request->get('nama');
        $rumah->kategori_id = $request->get('kategori_id');
        $rumah->id = $request->get('id');
        $rumah->district_id =  $request->get('district_id');
        $rumah->villages_id = $request->get('villages_id');
        $rumah->alamat = $request->get('alamat');

        
      
        $rumah->save();


       
        if($rumah){
            //redirect dengan pesan sukses
             return redirect()->route('home')->with(['success' => 'Data Berhasil Disimpan!']);
           
        }else{
            //redirect dengan pesan error
            return redirect()->route('home')->with(['error' => 'Data Gagal Disimpan!']);
           
        }
    }
}
