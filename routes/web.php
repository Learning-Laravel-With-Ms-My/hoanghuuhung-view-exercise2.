<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Request;
use App\Models\Task;
// use App\Models\Fruit;
use  Illuminate\Support\Facades\Validator;
// use App\Http\Controllers\FruitController;
// use App\Http\Controllers\MyController;
// use App\Http\Controllers\PhotoController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\FormController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\TasksController;
// use App\Http\Controllers\UploadFile;
// use App\Http\Controllers\UploadFileController;

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

// Route::get('/post', [FormController::class, 'index']);
// Route::post('/post', [FormController::class, 'store']);
// Route::get('/upload',[UploadFileController::class,'index']);
// Route::post('/upload',[UploadFileController::class, 'handleFile'])->name('categories.upload');
// Route::get('/getform',[UploadFileController::class, 'getForm']);
// Route::post('/getform',[UploadFileController::class, 'handleFormSubmit']);
// Route::post('/post', function (Request $request){
//     $name = $request->all();
//     return dd($name);
    
// });



// Route::get('/pnv',[HomeController::class, 'index']);
// Route::get('/pnv1',[HomeController::class, 'index']);
// Route::get('/',function(){
//     return view('home',['title' => 'Hello World','alertMessage' => 'Day là thông báo']);
// });

// Route::get('/',function(){
//     $posts = [
//         ['name' => 'post1'],
//         ['name' => 'post2'],
//         ['name' => 'post3'],
//         ['name' => 'post4'],
//         ['name' => 'post5'],
//     ];
//     return view('home',compact('posts'));
// });
// Route::get('/',function(){
//     return view('home');});

// Route::get('/', function () {
//     $tasks = [
//         'name' => 'Jon',
//     ];
//     return view('tasks', $tasks);
// });


// Route::get('/', function () {
//     $tasks = Task::all(); // Fetch tasks from the database
//     return view('tasks', ['tasks' => $tasks]);
// });

// use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/', function () {
        return view('tasks', [
            'tasks' => Task::orderBy('created_at', 'asc')->get()
        ]);
    });

    /**
     * Add New Task
     */

    Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    });
    /**
     * Delete Task
     */
    Route::delete('/task/{id}', function ($id) {
        Task::findOrFail($id)->delete();
        return redirect('/');
    });
});

// Route::get('/dashboard', function (){
//     return view('admin.dashboard');
// });