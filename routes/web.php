<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
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

Route::get('/', [AdminController::class,'login']);

Route::get('admin',[AdminController::class,'index'])->name('admin');

Route::get('bbb',function (){
    return 'Bilai';
});

Route::get('admin/login',[AdminController::class,'login']);

Route::post('admin/login',[AdminController::class,'submitLogin']);

Route::get('admin/logout',[AdminController::class,'logout'])->name('logout');


//Department Resource

Route::resource('depart', DepartmentController::class);
