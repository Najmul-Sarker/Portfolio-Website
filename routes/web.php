<?php

use App\Http\Controllers\AboutPagesController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PortfolioPagesController;
use App\Http\Controllers\ServicePagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//     return view('pages.index');
// });

Route::get('/',[PagesController::class,'index'])->name('home');
Route::get('/admin/dashboard',[MainPagesController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/main',[MainPagesController::class,'index'])->name('admin.main');
Route::put('/admin/main',[MainPagesController::class,'update'])->name('admin.main.update');

//Services route
Route::get('/admin/services/show',[ServicePagesController::class,'index'])->name('admin.services.index');
Route::get('/admin/services/create',[ServicePagesController::class,'create'])->name('admin.services.create');
Route::post('/admin/services/store',[ServicePagesController::class,'store'])->name('admin.services.store');
Route::get('/admin/services/edit/{service}',[ServicePagesController::class,'edit'])->name('admin.services.edit');
Route::post('/admin/services/update/{service}',[ServicePagesController::class,'update'])->name('admin.services.update');
Route::delete('/admin/services/delete/{service}',[ServicePagesController::class,'delete'])->name('admin.services.delete');

//portfolios route
Route::get('/admin/portfolios/show',[PortfolioPagesController::class,'index'])->name('admin.portfolios.index');
Route::get('/admin/portfolios/create',[PortfolioPagesController::class,'create'])->name('admin.portfolios.create');
Route::put('/admin/portfolios/store',[PortfolioPagesController::class,'store'])->name('admin.portfolios.store');
Route::get('/admin/portfolios/edit/{portfolio}',[PortfolioPagesController::class,'edit'])->name('admin.portfolios.edit');
Route::post('/admin/portfolios/update/{portfolio}',[PortfolioPagesController::class,'update'])->name('admin.portfolios.update');
Route::delete('/admin/portfolios/delete/{portfolio}',[PortfolioPagesController::class,'delete'])->name('admin.portfolios.delete');

//abouts route
Route::get('/admin/abouts/show',[AboutPagesController::class,'index'])->name('admin.abouts.index');
Route::get('/admin/abouts/create',[AboutPagesController::class,'create'])->name('admin.abouts.create');
Route::put('/admin/abouts/store',[AboutPagesController::class,'store'])->name('admin.abouts.store');
Route::get('/admin/abouts/edit/{about}',[AboutPagesController::class,'edit'])->name('admin.abouts.edit');
Route::post('/admin/abouts/update/{about}',[AboutPagesController::class,'update'])->name('admin.abouts.update');
Route::delete('/admin/abouts/delete/{about}',[AboutPagesController::class,'delete'])->name('admin.abouts.delete');


//contact routes
Route::get('/admin/contact/show',[ContactFormController::class,'index'] )->name('admin.contact.index');
Route::get('/admin/contact/create',[ContactFormController::class,'create'] )->name('admin.contact.create');
Route::post('/admin/contact/store',[ContactFormController::class,'store'] )->name('admin.contact.store');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


