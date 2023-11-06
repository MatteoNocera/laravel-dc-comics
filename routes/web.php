<?php

use App\Http\Controllers\Admin\ComicController;
use App\Http\Controllers\Admin\TrashController;
use App\Http\Controllers\Guest\PageController;
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


Route::get('/', [PageController::class, 'index'])->name('welcome');

Route::get('/comics', [PageController::class, 'comics'])->name('comics');

Route::get('/show/{comic}', [PageController::class, 'show'])->name('show');

Route::get('/comics/trash', [TrashController::class, 'trash'])->name('trash');

Route::post('restore/{comic}', [TrashController::class, 'restore'])->name('restore');

Route::resource('admin/comics', ComicController::class);
