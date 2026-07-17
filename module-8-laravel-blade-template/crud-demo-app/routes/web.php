<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\ContactController;
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

// load blade or views 
// Route::get('/',function(){
//     return view('index');
// });

// load student managements templates routing 
Route::get('/',[HomeController::class,'index']);
Route::get('/add-students',[AddStudentController::class,'index']);
// load features 
Route::get('/features',function(){
    return view('features');
});

// load contact us
Route::get('/contact-us',[ContactController::class,'index']);