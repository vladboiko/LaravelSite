<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
//=============================Second Front Start

Route::get('/index',[App\Http\Controllers\front\SecondController::class, 'index']);//{
	//return view('second_front');
//});

Route::resource('articles',App\Http\Controllers\Admin\ArticleController::class);

Route::get('/about',function(){
	return view('about');
});//admin
Route::get('/tasks',function(){
	return view('tasks');
});//admin
Route::resource('/blog',App\Http\Controllers\front\BlogController::class);

Route::get('/contact',function(){
	return view('contact');
});//admin

Route::get('/single',function(){
	return view('single');
});//admin

Route::get('/service',function(){
	return view('service');
});//admin

Route::get('/pricing',function(){
	return view('pricing');
});//admin


//------------------------------------SECOND FRONT Finish--------------------
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/portfolio',App\Http\Controllers\Front\MainController::class);

	
Route::middleware(['role:admin'])->prefix('admin_panel')->group( function () {
Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index']);//admin

Route::resource('themes',App\Http\Controllers\Admin\ThemeController::class);
Route::resource('tasks',App\Http\Controllers\Admin\TaskController::class);
//Route::resource('articles',App\Http\Controllers\Admin\ArticleController::class);
Route::resource('solutions',App\Http\Controllers\Admin\SolutionController::class);
Route::resource('users',App\Http\Controllers\Admin\UserController::class);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
