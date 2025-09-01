<?php

use Illuminate\Support\Facades\Route;


Route::get('/{slug}', function ($slug) {
    if($slug){
        return view($slug);
    } else{
        return view('index');        
    }
});

Route::get('', function () {
    return view('index'); 
});