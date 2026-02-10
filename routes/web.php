<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function(){
    return "Hello World";
});
Route::get('user/{u_id}', function($id){
    return $id;

});

Route::get('post/{u_id}/comment/{comment_id}', function($id, $comment){
    return $id . $comment; 
});

Route::get('students/{roll_no?}', function($roll_number = null){
return 'Hii' . $roll_number;
});

Route::get('student/{user_id?}', function($id = 'Aman'){
    return 'Hii' . $id;
});

Route::get('product/{p_name}', function($name){
return 'Product Name:' . $name;
})->where('p_name', '[A-Za-z]+');

Route::get('employee/{id}/{name}', function($id, $name){
return "Manger Id : " . $id . "  Mangaer name : " . $name;
})->where(['id'=>'[0-9]+', 'name'=>'[a-z]+']);