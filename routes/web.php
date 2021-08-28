<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index');

Route::get('/about', 'PageController@about');

Route::get('/users/{id}', 'PageController@users');

Route::get('employee', 'EmployeeController@index');

Route::get('add-employee', 'EmployeeController@create');

Route::post('store-employee', 'EmployeeController@store');

Route::get('edit-employee/{id}', 'EmployeeController@edit');
Route::put('update-employee/{id}', 'EmployeeController@update');

// Route::get('delete-employee/{id}', 'EmployeeController@delete');
Route::delete('delete-employee/{id}', 'EmployeeController@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function() {
    Route::resource('posts', 'PostController');
});

// Route::get('posts', 'PostController@index');

// Route::get('posts/create', 'PostController@create');
// Route::get('posts/{id}/edit', 'PostController@edit');

// Route::put('posts/{id}', 'PostController@update');
