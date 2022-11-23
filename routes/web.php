<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\TagController;


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
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/movie', [MovieController::class, 'index'])->name('admin.listMovie');

    Route::get('/createMovie', [MovieController::class, 'createMovie'])->name('admin.createMovie');

    Route::post('storeMovie',[MovieController::class,'storeMovie'])->name('admin.storeMovie');
    Route::delete('deleteMovie/{id}',[MovieController::class,'deleteMovie'])->name('admin.deleteMovie');

    Route::get('/editMovie/{id}', [MovieController::class, 'editMovie'])->name('admin.editMovie');
    Route::get('/deleteImage/{id}', [MovieController::class, 'deleteImage']);
    Route::put('/updateMovie/{id}',[MovieController::class,'updateMovie'])->name('admin.updateMovie');

    Route::get('/tagMovie',[TagController::class,'index'])->name('admin.tagMovie');
    Route::post('/createTag',[TagController::class,'createTag'])->name('admin.createTag');
    Route::get('/deleteTag/{id}',[TagController::class,'deleteTag']);
    Route::get('/editTag/{id}',[TagController::class, 'editTag']);
    Route::put('/updateTag/{id}',[TagController::class, 'updateTag']);

});
