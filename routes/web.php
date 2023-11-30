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
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('test', function () { //function () -> anonymous fun
    return "Welcome to my first laravel project";
});
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/test1/{id}', function ($id) {
    return "The ID is: " . $id;
});
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/test2/{ig?}', function ($id = 0) {  //ig is the programming def but $id is the var that = ig
    return "The ID is: " . $id;
});
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/test3/{id?}', function ($id = 0) { //id is optional
    return "The ID is: " . $id;
})->where(['id' => '[0-9]+']);
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/test4/{n?}', function ($id = 0) {
    return "The ID is: " . $id;
})->whereNumber('n');
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/test5/{name?}', function ($name = 'nourhan') {
    return "The Name is: " . $name;
})->whereAlpha('name');
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/test6/{id}/{name}', function ($id, $name) {
    return "The ID is: " . $id . " & Name is: " . $name;
})->where(['id' => '[0-9]+', 'name' => '[a-zA-Z]+']);
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/product/{pro}', function ($pro) {
    return "The product is: " . $pro;
})->whereIn('pro', ['laptop', 'pc', 'mobile']);
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::prefix('networks')->group(function () {
    Route::get('/lan', function () {
        return "LAN";
    });
    Route::get('/wan', function () {
        return "WAN";
    });
    Route::get('/man', function () {
        return "MAN";
    });
});
///////////////////////////////////////////////////////////////////////////////////////////////////////////

// Route::fallback(function () {
//     return redirect('/');
// });
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/first', function () {
    return view('test');
});
///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/food', function () {
    return view('food');
});
///////////////////////////////////////////////////////////////////////////////////////////////////////////
// Task 2
//
Route::get('/about', function () {
    return view('about');
});
//////////////////////////////////////////
Route::get('/contact', function () {
    return "<h1>This is Contact Us page</h1>";
});
//////////////////////////////////////////
Route::prefix('blog')->group(function () {
    Route::get('science', function () {
        return "<h1>This is Science page</h1>";
    });
    Route::get('sports', function () {
        return "<h1>This is Sports page</h1>";
    });
    Route::get('math', function () {
        return "<h1>This is Math page</h1>";
    });
    Route::get('medical', function () {
        return "<h1>This is Medical page</h1>";
    });
});