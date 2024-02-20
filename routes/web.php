<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\IklanPremiumController; 
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ExportController;

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
    Route::resource('properties', PropertiController::Class);
    Route::resource('ads', IklanPremiumController::class);
    //exports
    Route::get('export-pdf-users', [ExportController::class, 'printUsers'])->name('export.pdf.users');
    Route::get('export-iklan-properti', [ExportController::class, 'printiklanProperti'])->name('export.pdf.iklan.properti');
    Route::get('export-iklan-premium', [ExportController::class, 'printIklanPremium'])->name('export.pdf.iklan.premium');
    Route::get('export-excel-users', [ExportController::class, 'exportCsvUsers'])->name('export.csv.users');
    Route::get('export-excel-iklan-properti', [ExportController::class, 'exportCsvIklanProperti'])->name('export.csv.iklan.properti');
    Route::get('export-excel-iklan-premium', [ExportController::class, 'exportCsvIklanPremium'])->name('export.csv.iklan.premium');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/test-home', [PagesController::class, 'test'])->name('test');  
    
    Route::get('/tentang-kami', [PagesController::class, 'tentangKami'])->name('tentang.kami');
    
    Route::get('/cari', [PagesController::class, 'cari'])->name('cari.properti'); 
    
    Route::post('/login-agen', [AgentController::class, 'loginAgen'])->name('login.agen'); //Route Agen
    Route::get('/cari-agen', [AgentController::class, 'index'])->name('cari.agen'); 
    Route::get('/jual-properti-online', [AgentController::class, 'jualProperti'])->name('jual.properti');
    Route::get('/explore', [AgentController::class, 'explore'])->name('explore');
    Route::get('/single-listing/{IklanProperti:id}', [AgentController::class, 'singleListing'])->name('single.listing'); 
    Route::get('/iklan-premium/{IklanPremium:id}', [AgentController::class, 'showIklanPremium'])->name('show.iklan.premium'); //show iklan premium 
    Route::resource('posts', PostController::class); 
    // Route::resource('properties', PropertiController::Class);

    Route::get('/cari-properti', [SearchController::class, 'cariProperti'])->name('cari.properti'); //route search
    Route::get('/cari-iklan-premium', [SearchController::class, 'cariIklanPremium'])->name('cari.iklan.premium');
    Route::get('/cari-agen-rumah', [SearchController::class, 'cariAgen'])->name('cari.agen.rumah');

    Route::get('simulasi-kpr', [PagesController::class, 'simulasiKpr'])->name('simulasi.kpr');
    Route::get('pindah-kpr', [PagesController::class, 'pindahKpr'])->name('pindah.kpr');
    Route::get('pemilik-properti', [PagesController::class, 'jualPropertimu'])->name('jual.propertimu'); 
    Route::get('carikan-properti', [PagesController::class, 'carikanProperti'])->name('carikan.properti');
    Route::post('carikan-properti', [PagesController::class, 'StoreCarikanProperti'])->name('store.carikan.properti');
    Route::post('get-in-touch', [AgentController::class, 'StoreGetInTouch'])->name('store.get.in.touch');
});  