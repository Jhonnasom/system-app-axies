<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/showitem', function () {
    return view('items.show');
});



Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/home/explore', [HomeController::class, 'explore'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile/image', [ProfileController::class, 'update_image'])->name('profile.update_image');
});

Route::resource('main', MainController::class);

Route::resource('categories', CategoryController::class);

Route::resource('collections', CollectionController::class);

Route::resource('items', ItemController::class);

Route::resource('users', UserController::class);

require __DIR__.'/auth.php';
