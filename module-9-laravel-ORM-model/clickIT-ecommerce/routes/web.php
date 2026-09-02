<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AddCategoryController;
use App\Http\Controllers\admin\AddProductController;

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
// send email via contact form
Route::get('/contact-us',[ContactController::class,'index']);
Route::post('/contact-us',[ContactController::class,'store']);
// load clickecomm app admin views here
Route::get('/admin-login',[AdminLoginController::class,'index']);
Route::get('/admin-login/dashboard',[AdminDashboardController::class,'index']);
Route::get('/admin-login/manage-contacts',[ContactController::class,'show']);
Route::get('/admin-login/manage-contacts/{id}',[ContactController::class,'destroy']);
// crud in laravel add category ..
Route::get('/admin-login/addcategory',[AddCategoryController::class,'index']);
Route::post('/admin-login/addcategory',[AddCategoryController::class,'store']);
Route::get('/admin-login/managecategory',[AddCategoryController::class,'show']);
Route::get('/admin-login/managecategory/{id}',[AddCategoryController::class,'destroy']);
Route::get('/admin-login/editcategory/{id}',[AddCategoryController::class,'edit']);
Route::post('/admin-login/editcategory/{id}',[AddCategoryController::class,'update']);

// add products
Route::get('/admin-login/addproducts',[AddProductController::class,'index']);
Route::post('/admin-login/addproducts',[AddProductController::class,'store']);
Route::get('/admin-login/manageproducts',[AddProductController::class,'show']);
Route::get('/admin-login/manageproducts/{id}',[AddProductController::class,'destroy']);
Route::get('/admin-login/editproducts/{id}',[AddProductController::class,'edit']);
Route::post('/admin-login/editproducts/{id}',[AddProductController::class,'update']);

