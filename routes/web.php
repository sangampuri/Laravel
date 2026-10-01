<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo/{name}/{id?}',function($name,$id=null){
    echo "ID : $id";
    echo "Welcome $name";
});

// Route::get('/data/{name}',function($name){
//     $data = compact('name');
//     print_r($data);
//     return view('data',$data);
// });

Route::get('/data/{name}/{id}',function($name,$id){
    $data = [
        'name'=>$name,
        'id'=>$id
    ];
    return view('data')->with($data);
});