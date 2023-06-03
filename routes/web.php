<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\AdminCrudController;

//use Illuminate\Http\Controllers\AboutController;

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware("auth")->group(function () {
    Route::get('plans', [PlanController::class, 'index']);
    Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
});

Route::get('/', function () {
    return view('index');
});

Route::get('/about', [AboutController::class,'index']);
Route::get('/service', [ServiceController::class,'index']);
Route::get('/grain', [GrainController::class,'get_grain']);
Route::get('/hebibicid', [HebibicidController::class,'get_herbecide']);
Route::get('/phosphat', [PhosphatController::class,'get_phosphate']);
Route::get('/contact', [ContactController::class,'index']);
Route::get('/show', [ShowcartController::class,'get_grain']);

Route::get('/ajoutProduit/{type}-{id}',[CartController::class,'addTocart']);
Route::get('/dess/{type}-{id}',[CartController::class,'destroy']);
Route::get('/vider',[CartController::class,'vider']);
//Route::get('/ajoutProduit/{type}-{id}/{name_product}/{unit_price}', [CartController::class,'addTocart']);Route::get('/update22/{id}', [AdminCrudController::class, 'update'])->name('product.update');

//Crud_page
Route::resource('product', AdminCrudController::class);
Route::get('/listeProducts', [AdminCrudController::class, 'index'])->name('index');
Route::get('/create', [AdminCrudController::class, 'create'])->name('create');
Route::get('/show/{id}', [AdminCrudController::class, 'show'])->name('show');
Route::get('/edit/{id}', [AdminCrudController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [AdminCrudController::class, 'update'])->name('update');
Route::post('/store', [AdminCrudController::class, 'store'])->name('store');








Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


