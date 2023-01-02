<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\sliders;
use App\Http\Controllers\frontend;
use App\Http\Controllers\product;
use App\Http\Controllers\blog;
use App\Http\Controllers\Admin;
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

Route::get('/',[frontend::class,'weclome']);
Route::get('/dashboard',[HomeController::class,'dashboard']);
Route::get('/sliders',[sliders::class,'index']);
Route::post('/Addslide',[sliders::class,'AddSlider']);
Route::get('/Allslide',[sliders::class,'allSlider'])->name('Allslide');
Route::get('/deleteslide/{id}',[sliders::class,'deleteSlide'])->name('deleteslide');

//--------product---------

Route::get('/custproduct',[product::class,'custproduct']);
Route::post('/Addproduct',[product::class,'addProduct']);
Route::get('/allproduct',[product::class,'AllProduct'])->name('allproduct');
Route::get('/editproduct/{id}',[product::class,'editproduct'])->name('editproduct');
Route::post('/updateproduct',[product::class,'updateProduct']);
Route::get('/Deleteproduct/{id}',[product::class,'deleteProduct'])->name('Deleteproduct');
Route::get('/viewproduct/{id}',[product::class,'viewProduct'])->name('viewproduct');
//------benefit-------------
 Route::get('/benefit/{id}',[product::class,'Benefit'])->name('benefit');
 Route::post('/Addbenefit',[product::class,'addbenefit']);
 Route::get('/allbenefit',[product::class,'Allbenefit'])->name('allbenefit');
 Route::get('/editbenefit/{id}',[product::class,'Editbenefit'])->name('editbenefit');
 Route::post('/updatebenefit',[product::class,'updateBenefit']);
Route::get('/Deletebenefit/{id}',[product::class,'deletebenefit'])->name('Deletebenefit');

//=======================blog================
Route::get('/bloges',[blog::class,'blog']);
Route::post('/Addblog',[blog::class,'addblog']);
Route::get('/Allblog',[blog::class,'allblog'])->name('Allblog');
Route::get('/Editblog/{id}',[blog::class,'editblog'])->name('Editblog');
Route::post('/Updateblog',[blog::class,'updateblog']);
Route::get('/Deleteblog/{id}',[blog::class,'deleteblog'])->name('Deleteblog');
//==============pages===============
Route::get('/shopsingle/{id}',[frontend::class,'shopsingle'])->name('shopsingle');
Route::get('/About',[frontend::class,'about'])->name('About');
Route::get('/Shop',[frontend::class,'shop'])->name('Shop');
Route::get('/Partner',[frontend::class,'partner'])->name('Partner');
Route::post('/Addpartner',[frontend::class,'addPartner'])->name('Addpartner');
Route::get('/Contact',[frontend::class,'contact'])->name('Contact');
Route::post('/Addcontact',[frontend::class,'addcontact'])->name('Addcontact');

//===========login=============
Route::get('/login',[Admin::class,'login']);
Route::get('/register',[Admin::class,'reigister']);