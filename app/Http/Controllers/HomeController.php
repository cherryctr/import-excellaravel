<?php

namespace App\Http\Controllers;

use App\HomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Models\City;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
class HomeController extends Controller
{


      /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    // UNTUK AKSES LOGIN 
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    //GET ALL PROVINCE
        $provincess = Province::orderby("name","asc")
                    ->select('id','name')->where('id',36)->get();
    //    
        $city= City::orderby("name","asc")
                    ->select('id','name')->whereIn('id',[3671,3674])->get();

       
        return view('layout.dashboard.index',compact('provincess','city'));
    }


    public function getCitys($province_id){

        $citysData['data'] = City::orderby("name","asc")
                   ->select('province_id','name')
                   ->where('province_id',$province_id)
                   ->get();
        echo( $citysData['data']);exit;
       return response()->json($citysData);
   }


   public function getDistrict($city_id){

    $districtData['data'] = Kecamatan::orderby("name","asc")
               // ->select('province_id','id','name')
               ->where('city_id',$city_id)
               ->get();
    // echo( $citysData['data']);exit;
   return response()->json($districtData);
}

public function getVillages($district_id){

        $villagesData['data'] = Kelurahan::orderby("name","asc")
                // ->select('province_id','id','name')
                ->where('district_id',$district_id)
                ->get();
        
        // echo( $citysData['data']);exit;
        return response()->json($villagesData);
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
     * @param  \App\HomeModel  $homeModel
     * @return \Illuminate\Http\Response
     */
    public function show(HomeModel $homeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeModel  $homeModel
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeModel $homeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeModel  $homeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeModel $homeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeModel  $homeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeModel $homeModel)
    {
        //
    }
}
