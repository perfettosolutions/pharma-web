<?php


use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\admin\InquiryController;
use App\Http\Controllers\visitor\HomeController;
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

Route::get('admin/dashboard',[Dashboard::class,'index'])->name('admin.dashboard');
Route::get('admin/inquiry',[InquiryController::class,'index'])->name('admin.inquiry');
Route::get('/',[HomeController::class,'homepage'])->name('home');
Route::get('/production',[HomeController::class,'productionpage'])->name('production');
Route::get('/profile',[HomeController::class,'profile'])->name('profile');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');