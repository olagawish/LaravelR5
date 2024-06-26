<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Clientcontroller;
use App\Http\Controllers\StudentsController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


Route::post('insertClient', [Clientcontroller::class, 'store'])->name('insertClient');
Route::get('addClient', [Clientcontroller::class, 'create'])->name('addClient');
Route::get('clients', [Clientcontroller::class, 'index'])->middleware('verified')->name('clients');
Route::get('editClient/{id}', [Clientcontroller::class, 'edit'])->name('editClient');
Route::put('updateClients/{id}', [Clientcontroller::class, 'update'])->name('updateClients');
Route::get('showClient/{id}', [Clientcontroller::class, 'show'])->name('showClient');
Route::delete('delClient', [Clientcontroller::class, 'destroy'])->name('delClient');
Route::get('trashClient', [Clientcontroller::class, 'trash'])->name('trashClient');
Route::get('restoreClient/{id}', [Clientcontroller::class, 'restore'])->name('restoreClient');
Route::delete('forceDeleteClient', [Clientcontroller::class, 'forceDelete'])->name('forceDeleteClient');



Route::post('insertStudent', [StudentsController::class, 'store'])->name('insertStudent');
Route::get('addStudent', [StudentsController::class, 'create'])->name('addStudent');
Route::get('students', [StudentsController::class, 'index'])->name('students');
Route::get('editStudent/{id}', [StudentsController::class, 'edit'])->name('editStudent');
Route::put('updateStudent/{id}', [StudentsController::class, 'update'])->name('updateStudent');
Route::get('showStudent/{id}', [StudentsController::class, 'show'])->name('showStudent');
Route::delete('delStudent', [StudentsController::class, 'destroy'])->name('delStudent');
Route::get('trashStudent', [StudentsController::class, 'trash'])->name('trashStudent');
Route::get('restoreStudentt/{id}', [StudentsController::class, 'restore'])->name('restoreStudent');
Route::delete('forceDeleteStudent', [StudentsController::class, 'forceDelete'])->name('forceDeleteStudent');

Route::get('/', function () {
    return view('welcome');
});


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

Route::get('/form1', function() {
    return view('form1');
})->name('form1');


Route::get('form1',function(){
    return view('form1');
   }) ;

Route::get('myval',[Mycontroller::class,'val'])->name('val');
Route::get('fval',[Mycontroller::class,'fval'])->name('fval');
Route::get('restval',[Mycontroller::class,'restval'])->name('restval');
Route::get('delval',[Mycontroller::class,'delval'])->name('delval');

Route::get('sendEmail',[Mailcontroller::class,'sendEmail'])->name('sendEmail');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


//Route::get('/sendEmail', [App\Http\Controllers\MailController::class, 'sendEmail'])->name('sendEmail');

//Route::post('/submit', [Mycontroller::class, 'submit'])->name('submit');

//Route::fallback(function() {
    //return 'the required is not found';
   // return redirect('/');
   // });

//Route::post('recform1', function() {
//    return 'data received';
//})->name('receiveform1');


//Route::get('test20', [Mycontroller::class, 'my_data']);




//Route::post('/submit', [MyController::class, 'submit'])->name('submit');
