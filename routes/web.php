<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\komencontroller;
use App\Http\Controllers\tamucontroller;
use App\Http\Controllers\layoutcontroller;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\userscontroller;
use App\Http\Middleware\isLogin;
use App\Models\komen;
use App\Models\tamu;
use App\Models\User;
use GuzzleHttp\Middleware;

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


Route::resource('tamu', tamucontroller::class)->Middleware('isLogin');
Route::resource('users', userscontroller::class)->Middleware('isLogin');

// Route::resource('sesi', SessionController::class);
Route::controller(layoutcontroller::class)->group(function(){

    Route::get('layout/index', 'index');
    Route::get('layout/frontend', 'frontend');
    Route::get('layout/signin', 'signin');
    Route::get('layout/signup', 'signup');
    Route::get('layout/testemplate', 'testemplate');

});



Route::get('layout/home', function(){
   $komen_count = komen::count();
   $user_count = User::count();
   return view('layout.home', compact('komen_count', 'user_count'));

})->Middleware('isLogin');
//route resource


Route::resource('/auth', SessionController::class);
Route::resource('/komen', komencontroller::class)->Middleware('isLogin');

Route::get('/tentang',[HalamanController::class,'tentang']);
Route::get('/kontak',[HalamanController::class,'kontak']);
Route::get('/komen',[komencontroller::class,'index'])->Middleware('isLogin');
Route::get('/users',[komencontroller::class,'index']);



// Route::get('/users',[userscontroller::class,]);
Route::get('/sesi',[SessionController::class, 'index']);

Route::post('log_process', [SessionController::class, 'login']);
Route::post('reg_process', [SessionController::class, 'create']);
// Route::post('komen', [komencontroller::class, 'komen']);
Route::get('/sesi/logout', [ SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register']);
// Route::post('/sesi/create',[SessionController::class, 'create'])->Middleware('isTamu');

Route::get('/', [layoutcontroller::class,'frontend']);
Route::get('/users', function () {
       return view('users.index');
     });


