<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\UsersController;

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

Route::prefix('dashboard')->group(function(){
    Route::get('/main',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/users',[UsersController::class,'index'])->name('users.index');
    
});

Route::get('/', function () {
    return view('welcome');
    
});

Auth::routes();
Route::get('/branch/query/autocomplete',[BranchController::class,'autocomplete'])->name('branch.autocomplete');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
