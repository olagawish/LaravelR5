<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ola/{id}', function($id){
    return 'welcome to my first website'. $id;

    
});