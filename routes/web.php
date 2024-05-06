<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Clientcontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('test20', [Mycontroller::class, 'my_data']);

Route::post('insertClient', [Clientcontroller::class, 'store'])->name('insertClient');
Route::get('addClient', [Clientcontroller::class, 'create']);



//Route::post('/submit', [Mycontroller::class, 'submit'])->name('submit');

Route::get('ola/{id?}', function($id = 0){
    return 'welcome to my first website'. $id;

})->whereNumber('id');

Route::get('course/{name}', function($name){
    return 'my name is : ' . $name ;

//})->whereAlpha('name');//

})->whereIn('name' ,['ola', 'ahmed','ali']);


Route::prefix('cars')->group(function(){
    Route::get('bmw', function(){
        return 'category is bmw';
    });

    Route::get('mercedes', function(){
    return 'category is mercedes';
    });
});



//Route::fallback(function() {
    //return 'the required is not found';
   // return redirect('/');
   // });

   Route::get('form1',function(){
    return view('form1');
   }) ;

//Route::post('recform1', function() {
//    return 'data received';
//})->name('receiveform1');


Route::get('test20', [Mycontroller::class, 'my_data']);


Route::get('/form1', function() {
    return view('form1');
})->name('form1');

Route::post('/submit', [MyController::class, 'submit'])->name('submit');