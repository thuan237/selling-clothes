<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api_admin\CategoryController;
use App\Http\Controllers\Api_admin\CollectionController;
use App\Http\Controllers\Api_admin\ColorController;
use App\Http\Controllers\Api_admin\DetailReceiptController;
use App\Http\Controllers\Api_admin\ImageController;
use App\Http\Controllers\Api_admin\ProductCollectionController;
use App\Http\Controllers\Api_admin\ProductController;
use App\Http\Controllers\Api_admin\ProductSaleController;
use App\Http\Controllers\Api_admin\ReceiptController;
use App\Http\Controllers\Api_admin\SalePromotionController;
use App\Http\Controllers\Api_admin\SizeController;
use App\Http\Controllers\Api_admin\VariantionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route category
Route::apiResource('/category', CategoryController::class);
Route::get('/searchCategory/{name}', [CategoryController::class, 'getAllDanhMuc']);

//Routes collection
Route::apiResource('/collection', CollectionController::class);

//Routes color
Route::apiResource('/color', ColorController::class);

//Routes detailreceipt
Route::apiResource('/detailreceipt', DetailReceiptController::class);

//Routes image
Route::apiResource('/image', ImageController::class);

//Routes productcollection
Route::apiResource('/productcollection', ProductCollectionController::class);

//Routes product
Route::apiResource('/product', ProductController::class);

//Routes productsale
Route::apiResource('/productsale', ProductSaleController::class);

//Routes receipt
Route::apiResource('/receipt', ReceiptController::class);

//Routes salepromotion
Route::apiResource('/salepromotion', SalePromotionController::class);

//Routes size
Route::apiResource('/size', SizeController::class);

//Routes variantion
Route::apiResource('/variation', VariantionController::class);


// product client repository pattern
Route::get('/products', 'App\Http\Controllers\Client_api\ProductController@index');
// Route::post('/products/filter', 'App\Http\Controllers\Client_api\ProductController@product_filter');
Route::get('/products/weekly_best', 'App\Http\Controllers\Client_api\ProductController@get_weekly_best_product');
Route::get('/products/new_products', 'App\Http\Controllers\Client_api\ProductController@get_new_product');
Route::get('/products/search', 'App\Http\Controllers\Client_api\ProductController@search_products');

// category client
Route::get('/categories', 'App\Http\Controllers\Client_api\CategoryController@get_category');
Route::get('/categories/detail', 'App\Http\Controllers\Client_api\CategoryController@get_category_detail');