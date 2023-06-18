<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\komencontroller;
use App\Http\Controllers\tamucontroller;
use App\Http\Controllers\layoutcontroller;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\userscontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/mahasiswa/{id}/{nama}', function ($id,$nama) {
//     return ("<h1> Saya Mahasiswa STMIK Mardira Indonesia Dengan Nim $id & Nama $nama </h1>");
// })->where(['id', '[0-9]+','nama'=>'[A-Za-z]+']);

//  Route::get('/', [SessionController::class, 'sesi/welcome']);


Route::resource('tamu', tamucontroller::class)->Middleware('isLogin');
// Route::resource('sesi', SessionController::class);
Route::controller(layoutcontroller::class)->group(function(){
    Route::get('layout/home', 'home');
    Route::get('layout/index', 'index');
    Route::get('layout/frontend', 'frontend');
    Route::get('layout/signin', 'signin');
    Route::get('layout/signup', 'signup');
});

//route resource

Route::resource('/posts', Postcontroller::class);
Route::resource('/auth', SessionController::class);
Route::resource('/komen', komencontroller::class);

Route::get('/tentang',[HalamanController::class,'tentang']);
Route::get('/kontak',[HalamanController::class,'kontak']);



// Route::get('/users',[userscontroller::class,]);
Route::get('/sesi',[SessionController::class, 'index'])->Middleware('isTamu');
Route::post('log_process', [SessionController::class, 'login'])->Middleware('isTamu');
Route::post('reg_process', [SessionController::class, 'create'])->Middleware('isTamu');
// Route::post('komen', [komencontroller::class, 'komen']);
Route::get('/sesi/logout', [ SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register'])->Middleware('isTamu');
// Route::post('/sesi/create',[SessionController::class, 'create'])->Middleware('isTamu');

Route::get('/', [layoutcontroller::class,'frontend'])->middleware('isTamu');
Route::get('/users', function () {
       return view('users.index');
     });


