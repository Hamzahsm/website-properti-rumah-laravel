<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController; 

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

Auth::routes();
Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/landing-page', [PagesController::class, 'index'])->name('index');

    Route::get('/test-home', [PagesController::class, 'test'])->name('test'); 
    
    Route::get('/tentang-kami', [PagesController::class, 'tentangKami'])->name('tentang.kami');
    
    Route::get('/cari', [PagesController::class, 'cari'])->name('cari.properti'); 
    
    // Route Agen
    Route::get('/cari-agen', [AgentController::class, 'index'])->name('cari.agen'); 
    Route::get('/jual-properti-online', [AgentController::class, 'jualProperti'])->name('jual.properti');
    Route::get('/explore', [AgentController::class, 'explore'])->name('explore');
    Route::get('/single-listing', [AgentController::class, 'singleListing'])->name('single.listing'); 
    Route::resource('posts', PostController::class); 
    Route::resource('properties', PropertiController::Class);
}); 