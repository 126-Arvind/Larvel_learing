<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Basic / Static Route (returns a view)
Route::get('/', function () {
    return view('welcome', ['name'=>'Aman']);
});

// Basic Route returning a string
Route::get('about', function () {
    return "Hello World";
});

// Route with Required Parameter
Route::get('user/{u_id}', function ($id) {
    return $id;
});

// Route with Multiple Required Parameters
Route::get('post/{u_id}/comment/{comment_id}', function ($id, $comment) {
    return $id . $comment;
});

// Route with Optional Parameter (nullable)
Route::get('students/{roll_no?}', function ($roll_number = null) {
    return 'Hii ' . $roll_number;
});

// Route with Optional Parameter and Default Value
Route::get('student/{user_id?}', function ($id = 'Aman') {
    return 'Hii ' . $id;
});

// Route with Parameter Constraint (Regex)
Route::get('product/{p_name}', function ($name) {
    return 'Product Name: ' . $name;
})->where('p_name', '[A-Za-z]+');

// Route with Multiple Parameters + Constraints
Route::get('employee/{id}/{name}', function ($id, $name) {
    return "Manager Id : " . $id . "  Manager Name : " . $name;
})->where([
    'id' => '[0-9]+',
    'name' => '[a-zA-Z]+'
]);



Route::get( 'contactme', function(){
    return view('admin.contactme', ['name'=> 'Hii Aman']);
} 
);

Route::get('contact', [ContactController::class, 'contactme']);
Route::get('product', [ProductController::class, 'show']);