<?php

use App\Http\Controllers\web\WebViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminAuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AdminAuthController::class, 'login'])->name('home');
Route::get('search', [WebViewController::class, 'search']);
Route::get('property_details/{id}', [WebViewController::class, 'property_details']);
