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

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');


route::group(['prefix'=>'admion'], function ()
{
route::get('/saludar',function(){
    return "hola";
});

route::get('/saludar-p/{name}',function($name){
    return "hola: " .$name;
});
route::get('/saludar-d/{name?}',function($name="vacio"){
    return "hola: " .$name;

    route::get('validador/{num}',function($num){return $num;
    })->where (['num'=>'[A-Z][0-9]+']);
    //route::get('validador2/{num}/{num2}',function($num,$num2){return $num+$num2;
    //})->where (['num'=>'[0-9]+','num2'=>'[0-9+]);
});
});
