<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Post;
use App\Models\Product;
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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // KAHIT NAKA COMMENT OUT MGA TO, GAGANA CRUD NOOB //

    // Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    // Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    // Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    // Route::patch('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
    // Route::delete('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    // Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    //  Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    // Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
    //  Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    // Route::patch('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
    //  Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');

    // Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    // Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    // Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    // Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    // Route::patch('/products/{product}/update', [ProductController::class, 'update'])->name('products.update');
    // Route::delete('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');


    Route::get('/generate-pdf', [PostController::class, 'generatePdf'])->name('generate.pdf');
    Route::get('/delete-all-posts', [PostController::class, 'deleteAll'])->name('posts.deleteAll');
    Route::get('/delete-all-products', [ProductController::class, 'deleteAllp'])->name('products.deleteAllp');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

    //  Route::post('/posts/{print}/print', [PostController::class, 'generatePdf'])->name('generate');




    Route::resources([
        'users' => UserController::class,
        'posts' => PostController::class,
        'products' => ProductController::class,
    ]);
});



require __DIR__ . '/auth.php';
