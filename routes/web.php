<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

//members
Route::get('/', [MemberController::class, 'index'])->name('index');
Route::get('/create', [MemberController::class, 'create'])->name('create');
Route::post('/store', [MemberController::class, 'store'])->name('store');
Route::get('/show/{id}', [MemberController::class, 'show'])->name('show');
Route::get('/edit/{id}', [MemberController::class, 'edit'])->name('edit');
Route::post('/update', [MemberController::class, 'update'])->name('update');
Route::get('/destroy/{id}', [MemberController::class, 'destroy'])->name('destroy');


