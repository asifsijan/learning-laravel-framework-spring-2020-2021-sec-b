<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;


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

Route::get('/', function () {
    return view('welcome');
});


route::get('/register', [HomeController::class, 'create']);
route::post('/register', [HomeController::class, 'store']);
route::get('/home', [HomeController::class, 'index']);
route::get('/home/userlist', [HomeController::class, 'userlist']);
route::get('/home/edit/{id}', [HomeController::class, 'edit']);
route::post('/home/edit/{id}', [HomeController::class, 'update']);

