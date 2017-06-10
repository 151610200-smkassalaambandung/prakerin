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

Route::get('/', function () {
    return view('welcome');
});

Route::get('testmodel', function(){
	$q=App\Post::all();
	$pr=App\produk::all();
	$pe=App\penggunaa::all();
	$pt=App\pengaturann::all();
	return $q."<br></br>".$pr."<br></br>".$pe."<br></br>".$pt;
});
Route::get('/test','mycontroller@percobaan');
Route::get('/test2','mycontroller@percobaan2');
Route::get('/test3','mycontroller@percobaan3');
Route::get('/test4','mycontroller@percobaan4');
Route::get('/test5','mycontroller@percobaan5');
Route::get('/test6','mycontroller@percobaan6');
Route::get('/test7','mycontroller@percobaan7');
Route::get('/test8/{pilih?}/{baru?}','mycontroller@param');