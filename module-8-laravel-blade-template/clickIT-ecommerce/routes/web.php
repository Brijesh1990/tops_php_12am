<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;

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
// Route::get('/', function () {
//     return view('welcome');
// });

// load clickecomm app customers views here
Route::get('/',[HomeController::class,'index']);
Route::get('/about-us',function(){
    return view('clickecomm.about');
});
Route::get('/contact-us',[ContactController::class,'index']);

// load clickecomm app admin views here
Route::get('/admin-login',[AdminLoginController::class,'index']);
Route::get('/admin-login/dashboard',[AdminDashboardController::class,'index']);

