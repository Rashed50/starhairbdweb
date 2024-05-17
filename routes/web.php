<?php

use App\Http\Controllers\admin\CompanyProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MessageInfoController;
use App\Http\Controllers\admin\ProductNamesController;
use App\Http\Controllers\admin\ProductOrderController;
use App\Http\Controllers\admin\ProductTypesController;

// website
use App\Http\Controllers\website\WebsiteController;

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
Route::get('/phpinfo', function() {
    return phpinfo();
});

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/business-profile', [WebsiteController::class, 'privacy'])->name('website.privacy');
Route::get('/manufacturing', [WebsiteController::class, 'manufacturing'])->name('website.manufacturing');
Route::get('/curl-ring', [WebsiteController::class, 'curlRing'])->name('website.curlring');
Route::get('/mission/vision', [WebsiteController::class, 'mission'])->name('website.mission');

Route::get('/contact/message', [WebsiteController::class, 'contactMessage'])->name('website.contact-message');
Route::post('/contact/message', [WebsiteController::class, 'contactMessageStore'])->name('website.contact-message.store');

Route::get('/product/order', [WebsiteController::class, 'productOrder'])->name('website.product-order');
Route::post('/product/order', [WebsiteController::class, 'productOrderStore'])->name('website.product-order.store');


Route::prefix('product')->group(function () {
    Route::get('/', [WebsiteController::class, 'product'])->name('product.info');
    Route::get('/details/{id}', [WebsiteController::class, 'details'])->name('product.details');
});


// ======= Product type    ==========
Route::prefix('admin')->group(function () {
    Route::get('/product-type', [ProductTypesController::class, 'index'])->name('product-type.index');
    Route::get('/product-type/edit/{id}', [ProductTypesController::class, 'edit'])->name('product-type.edit');
    Route::post('/product-type', [ProductTypesController::class, 'store'])->name('product-type.store');
    Route::post('/product-type/edit', [ProductTypesController::class, 'update'])->name('product-type.update');
    Route::get('/product-type/delete/{id}', [ProductTypesController::class, 'delete'])->name('product-type.delete');
});


// ======= Product add    ==========
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/product', [ProductNamesController::class, 'index'])->name('product.index');
    Route::get('/product/edit/{id}', [ProductNamesController::class, 'edit'])->name('product.edit');
    Route::post('/product', [ProductNamesController::class, 'store'])->name('product.store');
    Route::post('/product/edit/{id}', [ProductNamesController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductNamesController::class, 'delete'])->name('product.delete');
});





Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth'])->name('admin.dashboard');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('company-profile', [CompanyProfileController::class, 'index'])->name('company.frofile');
    Route::post('company-profile', [CompanyProfileController::class, 'update'])->name('update-profile');



    Route::get('customer/message', [MessageInfoController::class, 'index'])->name('customer.message');
    Route::get('customer/order/message', [ProductOrderController::class, 'index'])->name('customer.order.message');
});


// Route::middleware('auth')->prefix('dashboard')->group(function () {
//     Route::get('category/add', [CategoryController::class, 'add'])->name('category.add');
//     Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
//     Route::post('category/add', [CategoryController::class, 'store'])->name('category.store');
//     Route::post('category/edit', [CategoryController::class, 'update'])->name('category.update');
// });


// Route::middleware('auth')->prefix('dashboard')->group(function () {
//     Route::get('brand/add', [BrandController::class, 'add'])->name('brand.add');
//     Route::get('brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
//     Route::post('brand/add', [BrandController::class, 'store'])->name('brand.store');
//     Route::post('brand/edit', [BrandController::class, 'update'])->name('brand.update');
//     // ajax route
//     Route::post('category-wise-brand', [BrandController::class, 'categoryWiseBrand'])->name('Category-wise-Brand');
//     // ajax route
// });

// Route::middleware('auth')->prefix('dashboard')->group(function () {
//     Route::get('size/add', [SizeController::class, 'add'])->name('size.add');
//     Route::get('size/edit/{id}', [SizeController::class, 'edit'])->name('size.edit');
//     Route::post('size/add', [SizeController::class, 'store'])->name('size.store');
//     Route::post('size/edit', [SizeController::class, 'update'])->name('size.update');
//     // ajax route
//     Route::post('brand-wise-size', [SizeController::class, 'brandWiseSize'])->name('Brand-wise-size');
//     // ajax route
// });

// Route::middleware('auth')->prefix('dashboard')->group(function () {
//     Route::get('thickness/add', [ThicknessController::class, 'add'])->name('thickness.add');
//     Route::get('thickness/edit/{id}', [ThicknessController::class, 'edit'])->name('thickness.edit');
//     Route::post('thickness/add', [ThicknessController::class, 'store'])->name('thickness.store');
//     Route::post('thickness/edit', [ThicknessController::class, 'update'])->name('thickness.update');
//     // ajax route
//     Route::post('size-wise-thickness', [ThicknessController::class, 'sizeWiseThickness'])->name('size-wise-thickness');
//     // ajax route
// });

// Route::middleware('auth')->prefix('dashboard')->group(function () {
//     Route::get('stock/add', [StockController::class, 'add'])->name('stock.add');
//     Route::get('stock/edit/{id}', [StockController::class, 'edit'])->name('stock.edit');
//     Route::get('stock/getBrand/{id}', [StockController::class, 'getBrand'])->name('stock.getBrand');
//     Route::get('stock/getSize/{id}', [StockController::class, 'getSize'])->name('stock.getSize');
//     Route::get('stock/getThick/{id}', [StockController::class, 'getThick'])->name('stock.getThick');
//     Route::post('stock/add', [StockController::class, 'store'])->name('stock.store');
//     Route::post('stock/edit', [StockController::class, 'update'])->name('stock.update');
// });


require __DIR__.'/auth.php';
