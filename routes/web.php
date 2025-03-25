<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;
use App\Http\Controllers\ProductController;

Route::get('/',[FrontEndController::class, 'index'])->name('inicio');

Route::get('/blog', [FrontEndController::class, 'blog'])->name('blog');
Route::get('/blog/post/{id}/{slug}', [FrontEndController::class, 'post'])->name('post');

Route::get('/tecnologia', [FrontEndController::class, 'tecnologia'])->name('tecnologia');
Route::get('/nosotros', [FrontEndController::class, 'nosotros'])->name('nosotros');

Route::get('/contacto', [FrontEndController::class, 'contacto'])->name('contacto');

Route::get('/catalogo/{slug}',[FrontEndController::class,'catalogo'] )->name('catalogo');

//BackEND

Route::get('admin/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('admin/login',[LoginController::class,'loginPost'])->name('loginPost');
Route::get('admin/dashboard',[LoginController::class,'dashboard'])
                                ->name('dashboard')->middleware('auth');

//CRUD BLOG
Route::get('admin/blog',[BlogController::class,'index'])->name('blogIndex')->middleware('auth');           
Route::get('admin/blog/create',[BlogController::class,'create'])->name('blogCreate')->middleware('auth');
Route::post('admin/blog/store',[BlogController::class,'store'])->name('blogStore')->middleware('auth');
Route::get('admin/blog/show/{id}',[BlogController::class,'show'])->name('blogShow')->middleware('auth');
Route::get('admin/blog/edit/{id}',[BlogController::class,'edit'])->name('blogEdit')->middleware('auth');
Route::put('admin/blog/update/{id}',[BlogController::class,'update'])->name('blogUpdate')->middleware('auth');
Route::delete('admin/blog/destroy/{id}',[BlogController::class,'destroy'])->name('blogDestroy')->middleware('auth');   

//crud Product
Route::get('admin/product',[ProductController::class,'index'])->name('productIndex')->middleware('auth');
Route::get('admin/product/create',[ProductController::class,'create'])->name('productCreate')->middleware('auth');
Route::post('admin/product/store',[ProductController::class,'store'])->name('productStore')->middleware('auth');
Route::get('admin/product/show/{id}',[ProductController::class,'show'])->name('productShow')->middleware('auth');
Route::get('admin/product/edit/{id}',[ProductController::class,'edit'])->name('productEdit')->middleware('auth');
Route::put('admin/product/update/{id}',[ProductController::class,'update'])->name('productUpdate')->middleware('auth');
Route::delete('admin/product/destroy/{id}',[ProductController::class,'destroy'])->name('productDestroy')->middleware('auth');