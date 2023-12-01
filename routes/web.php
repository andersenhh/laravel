<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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


Route::get('/', function(){
    return view('home', [
        "title"=>"home",
        "active" => 'home'
    ]);
});

// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About",
//         "active"=> "about",
//         "nama" => "Edwin Hujaya",
//         "NIM" => "03041382328110",
//         "kelas" => "Bukit B Palembang",
//         "email" => "edwin@gmail.com",
//         "image" => "admin.png"
//     ]);
// });

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}',[PostController::class,'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', function (){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class,'checkSlug'])->middleware('auth');;
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class,'checkSlug'])->middleware('auth');;
Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('auth');

// Route::put('/dashboard/categories/{category}', 'CategoryController@update');
// Route::delete('/dashboard/categories/{category}', 'CategoryController@destroy');