<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\Fruit;

use App\Http\Controllers\FruitController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UploadFile;
use App\Http\Controllers\UploadFileController;

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

// Route::get('/', function (Request $request) {


//     return "Path: ".$request->path();
// });

// Route::get('/', function (Request $request) {


//     return "Path: ".$request->url();
// });
// Route::get('/', function (Request $request) {


//     return "Path: ".$request->fullUrl();
// });
// Route::get('/', function (Request $request) {
//     return "Path: ".$request->fullUrlWithQuery(['name"=>"Vu thanh tai']);
// });
// Route::get('/admin/post', function (Request $request) {
//     if ($request->is('admin/*')){
//         return 'request path match with "admin/*" pattern ';
//     }
// });
// Route::get('/myview/{user}', function ($user) {
//     return view('home',['username'=>$user]);
// });
// Route::get('/fruits', function() {
//     return Fruit::all();
// });
// Route::get('/showFruits', [FruitController::class, 'getFruits']);
// Route::get('/showFruitsDetail', [FruitController::class, 'getDetails']);

// Route::get('/getcontroller',[UserController::class,'xinchao']);

// Route::resource('photo',PhotoController::class);
// Route::resource('my',MyController::class);

Route::get('/post', [FormController::class, 'index']);
Route::post('/post', [FormController::class, 'store']);
Route::get('/upload',[UploadFileController::class,'index']);
Route::post('/upload',[UploadFileController::class, 'handleFile'])->name('categories.upload');
// Route::post('/post', function (Request $request){
//     $name = $request->all();
//     return dd($name);
    
// });