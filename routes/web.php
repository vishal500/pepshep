<?php

use App\Http\Controllers\Admin\AdminController;
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


Route::group([
    'prefix' => 'admin','middleware' => ['web'],
], function () {

    Route::view('/login', 'admin.setting.login')->name('admin.exit');
    Route::post('/loginsave',  [AdminController::class, 'authenticate'])->name('admin.login');

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dash');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');;

        // Route::prefix('service-provider')->group(function () {
        //     Route::get('list',[ServiceProviderController::class, 'index'])->name('sp.list');
        //     Route::get('create',[ServiceProviderController::class, 'create'])->name('sp.create');
        //     Route::post('store',[ServiceProviderController::class, 'store'])->name('sp.store');
        //     Route::get('show/{id}',[ServiceProviderController::class, 'show'])->name('sp.show');
        //     Route::post('update',[ServiceProviderController::class, 'update']);
        // });

        // Route::prefix('client')->group(function () {
        //     Route::get('list',[ClientController::class, 'index'])->name('client.list');
        //     Route::get('create',[ClientController::class, 'create'])->name('client.create');
        //     Route::post('store',[ClientController::class, 'store'])->name('client.store');
        //     Route::get('show/{id}',[ClientController::class, 'show'])->name('client.show');
        //     Route::post('update',[ClientController::class, 'update']);
        // });
    });
});
