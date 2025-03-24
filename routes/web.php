<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;

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