<?php


use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\admin\InquiryController;
use App\Http\Controllers\auth\AuthController;
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

//add middle ware group
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'checkLogin'])->name('admin.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['login'])->group(function () {
    Route::get('admin/dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');
    Route::get('admin/inquiry', [InquiryController::class, 'index'])->name('admin.inquiry');
    Route::get('admin/getInquiry', [InquiryController::class, 'getInquiry'])->name('admin.getInquiry');
});
Route::get('/', [HomeController::class, 'homepage'])->name('home');
Route::get('/production', [HomeController::class, 'productionpage'])->name('production');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/product', [HomeController::class, 'product'])->name('product');
