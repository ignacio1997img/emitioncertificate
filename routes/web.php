<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeopleController;

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
    // Route::get('login', function () {
    //     return redirect('admin/login');
    // });

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    Route::get('login', function () {
        return redirect('admin/login');
    })->name('login');

    Route::get('/', [HomeController::class, 'index']);
    Route::get('register', [HomeController::class, 'register']);
    Route::post('register/store', [PeopleController::class, 'store'])->name('people.store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    
});


Route::get('/admin/clear-cache', function() {
    Artisan::call('optimize:clear');
    return redirect('/admin')->with(['message' => 'Cache eliminada.', 'alert-type' => 'success']);
})->name('clear.cache');
