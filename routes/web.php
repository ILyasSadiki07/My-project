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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', [IndexController::class,'index']);

Route::get('/about', [AboutController::class,'index']);
Route::get('/service', [ServiceController::class,'index']);
Route::get('/grain', [GrainController::class,'get_grain']);
Route::get('/hebibicid', [HebibicidController::class,'get_herbecide']);
Route::get('/phosphat', [PhosphatController::class,'get_phosphate']);
Route::get('/contact', [ContactController::class,'index']);
Route::get('/show', [ShowcartController::class,'get_grain']);


//shopping Carte
Route::get('/ajoutProduit/{type}-{id}',[CartController::class,'addTocart']);
Route::get('/dess/{type}-{id}',[CartController::class,'destroy']);
Route::get('/vider',[CartController::class,'vider']);





//Crud_page
Route::resource('product', AdminCrudController::class);
Route::get('products', 'AdminCrudController@index')->name('index2');
Route::get('/create', [AdminCrudController::class, 'create'])->name('create');
Route::get('/show/{id}', [AdminCrudController::class, 'show'])->name('show');
Route::put('/product/{id}', [AdminCrudController::class, 'update'])->name('products.update');
Route::post('/store', [AdminCrudController::class, 'store'])->name('store');








Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


