<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LoginController;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;

Route::get('/',[FrontEndController::class, 'index'])->name('inicio');

Route::get('/blog', [FrontEndController::class, 'blog'])->name('blog');
Route::get('/blog/post/{id}/{slug}', [FrontEndController::class, 'post'])->name('post');

Route::get('/tecnologia', [FrontEndController::class, 'tecnologia'])->name('tecnologia');
Route::get('/nosotros', [FrontEndController::class, 'nosotros'])->name('nosotros');

Route::get('/contacto', [FrontEndController::class, 'contacto'])->name('contacto');

Route::get('/catalogo/{slug}',[FrontEndController::class,'catalogo'] )->name('catalogo');

//BackEND

Route::get('admin/login',[LoginController::class,'login'])->name('login');
Route::post('admin/login',[LoginController::class,'loginPost'])->name('loginPost');
Route::get('admin/dashboard',[LoginController::class,'dashboard'])
                                ->name('dashboard')->middleware('auth');