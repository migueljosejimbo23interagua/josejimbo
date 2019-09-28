<?php


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