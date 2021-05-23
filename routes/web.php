<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Buyer\BuyerProfile;
use App\Http\Controllers\Buyer\BuyerRequirements;
use App\Http\Controllers\Buyer\InterestedProducts;
use App\Http\Controllers\Vendor\VendorProfile;
use App\Http\Controllers\Vendor\CompanyProfile;
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



Route::get('/', [HomeController::class, 'index']);

// Buyer
Route::get('/buyer-profile', [BuyerProfile::class, 'index']);
Route::get('/requirements', [BuyerRequirements::class, 'index']);
Route::get('/interested-products', [InterestedProducts::class, 'index']);


// Vnedor

Route::get('vendor-profile', [VendorProfile::class, 'index']);
Route::get('company-profile', [CompanyProfile::class, 'index']);
Route::get('company-leads', [CompanyProfile::class, 'leads']);
Route::get('product-interested', [CompanyProfile::class, 'ProductInterested']);


Route::get('manage-product', [CompanyProfile::class, 'ManageProduct']);
Route::get('product-page', [CompanyProfile::class, 'ProductPage']);
Route::get('contact', [CompanyProfile::class, 'ContactUs']);
Route::get('product-search', [CompanyProfile::class, 'ProductSearch']);

