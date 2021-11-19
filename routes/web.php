<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/proses/logout',  [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');


});


// GET PROVINSI  - KOTA
Route::get('/getCity/{provice_id}', [App\Http\Controllers\HomeController::class, 'getCity'] );
Route::get('/getCitys/{provice_id}', [App\Http\Controllers\HomeController::class, 'getCitys'] );
Route::get('/getCitysAll', [App\Http\Controllers\HomeController::class, 'ambilDataSemuaKota'] );

// Route::get('get/{id}', 'CategoryController@get_causes_against_category');

// GET Kecamatan
Route::get('/getDistrict/{city_id}', [App\Http\Controllers\HomeController::class, 'getDistrict'] );
// GET Kelurahan
Route::get('/getVillages/{district_id}', [App\Http\Controllers\HomeController::class, 'getVillages'] );



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// ADD USER
Route::post('/add/post/users', [App\Http\Controllers\UserController::class, 'prosestambahuser'])->name('postdatauser');
Route::get('/add/users', [App\Http\Controllers\UserController::class, 'tambahuser'])->name('postuser');

// DeleteUSER
Route::get('/user/hapus/{id}',[App\Http\Controllers\UserController::class, 'hapusDataUser'])->name('hapusdatauser');

// EDIT USER
Route::get('/user/edit/{id}',[App\Http\Controllers\UserController::class, 'updates'])->name('updatedatauser');
Route::post('/user/proses/edit/{id}',[App\Http\Controllers\UserController::class, 'update'])->name('editdatauser');


// Edit profile
Route::get('/user/profile/{id}',[App\Http\Controllers\UserController::class, 'updatesProfile'])->name('updatedataprofile');

Route::post('/user-profile/proses/edit/{id}',[App\Http\Controllers\UserController::class, 'updateProfiles'])->name('editdatauserprofiles');

