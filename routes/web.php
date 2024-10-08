<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;

 Route::get('/beranda', [BerandaController::class, 'home']);
 Route::get('/category/food-beverage', [ProdukController::class, 'food']);
 Route::get('/category/beauty-health', [ProdukController::class, 'beauty']);
 Route::get('/category/home-care', [ProdukController::class, 'homeCare']);
 Route::get('/category/baby-kid', [ProdukController::class, 'baby']);
 Route::get('/user', [UserController::class, 'user']);
 Route::get('/transaksi', [TransaksiController::class, 'transaksi']);

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

// Route::get('/hello', function () {
//     return 'Hello World';
// });

//Praktikum 2
// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/greeting', [WelcomeController::class, 'greeting']);

// //no. 6
// Route::get('/', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class,'articles']);

// Route::get('/', [HomeController::class,'index']);
// Route::get('/about', [AboutController::class,'about']);
// Route::get('/articles/{id}', [ArticleController::class,'articles']);

// //no.8
// use App\Http\Controllers\PhotoController;
// Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
// ]);



// // -----------------------------------------------


// // //Praktikum 3
// // Route::get('/greeting', function () {
// //     return view('blog.hello', ['name' => 'Fannisa']);
// //     });

// /*Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return 'NIM: 2241760102, Nama: Fannisa Azzahra'; 
// });*/



// // Route Parameters
// Route::get('/user/{name}', function ($name) { return 'Nama saya '.$name;
// });

// //Suatu route, juga bisa menerima lebih dari 1 parameter
// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });
    

// /*Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID ' . $id;
// });*/


// // Optional Parameters
// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });
    
// //Perubahan
// Route::get('/user/{name?}', function ($name='John') { return 'Nama saya '.$name;
// });


// // Route Name
// Route::get('/user/profile', function () {
//     //
//     })->name('profile');
    
//     Route::get(
//     '/user/profile', [UserProfileController::class, 'show']
//     )->name('profile');
    
//     // Generating URLs...
//     $url = route('profile');
    
//     // Generating Redirects...
//     return redirect()->route('profile');
    
// // Route Group dan Route Prefixes
// Route::middleware(['first', 'second'])->group(function () { Route::get('/', function () {
//     // Uses first & second middleware...
//     });
    
//     Route::get('/user/profile', function () {
//     // Uses first & second middleware...
//     });
//     });
    
//     Route::domain('{account}.example.com')->group(function () { Route::get('user/{id}', function ($account, $id) {
//     //
//     });
//     });
    
//     Route::middleware('auth')->group(function () { Route::get('/user', [UserController::class, 'index']); Route::get('/post', [PostController::class, 'index']); Route::get('/event', [EventController::class, 'index']);
    
//     });
    
// // Route Prefixes
// Route::prefix('admin')->group(function () { 
//     Route::get('/user', [UserController::class, 'index']); 
//     Route::get('/post', [PostController::class, 'index']); 
//     Route::get('/event', [EventController::class, 'index']);
// });

// // Redirect Routes
// Route::redirect('/here', '/there');

// // View Routes
// Route::view('/welcome', 'welcome'); 
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
