<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/', function () {
    return view('home',[
        'title'=> 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'active' => 'about',
        'title'=>'About',
        'name'=>'Dwimas Budi Sulistyo',
        'email'=>'dwimasbudi21@gmail.com',
        'image'=> 'violet.png'
    ]);
});



Route::get('/posts', [PostController::class, 'index']);
Route::get('/xposts', [PostController::class, 'xpost']);

Route::get('/post/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories/{category:slug}', function(Category $category){
//         return view('posts',[
//         'active' => 'categories',
//         'title' => "Post by Catagory : $category->name",
//         'posts'=>$category->posts->load('user', 'category'),
//         'category'=>$category->name
//         ]);
// });

Route::get('/categories', function () {
    
    return view('categories', [
        'active' => 'categories',
        'title' => 'Categories',
        'categories' => Category::orderBy('name')->get()
    ]);
});

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts',[
//         'title'=> "Post By Author : $author->name",
//         'active' => 'post',
//         'posts'=>$author->posts->load('user','category')
//     ]);
// });

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('dashboard/posts/checkSlug', [DashboardPostController::class,'checkSlug'])->middleware('auth');
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');
// Route::resource('dashboard/categories', AdminCategoryController::class)->except('show')->middleware('auth');
Route::resource('dashboard/categories', AdminCategoryController::class)->middleware('admin');