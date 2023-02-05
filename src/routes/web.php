<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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

Route::get('/quiz/{id?}', 'App\Http\Controllers\QuizController@quiz');

//追記

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');

Route::POST('/admin/store', [AdminController::class, 'store'])->name('admin.store');

Route::get('/edit/{id?}', [AdminController::class, 'edit'])->name('admin.edit');

Route::post('/update/{id?}', [AdminController::class, 'update'])->name('admin.update');

Route::post('/admin/destroy/{id?}', [AdminController::class, 'destroy'])->name('admin.destroy');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
