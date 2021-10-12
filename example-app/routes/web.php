<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', 'controladorEmpresa@indexCreate');

Route::resources([
    '/costumer' => 'ControllerCostumer',
    '/seller' => 'ControllerSeller',
    '/sell' => 'ControllerSell',
    '/car' => 'ControllerCar',
    '/brand' => 'ControllerBrand'
]);

Route::get('/API/PayPal/Pay', 'ControllerPayment@payWithPayPal');
Route::get('/API/PayPal/Pay/Status', 'ControllerPayment@PayPalStatus');
Route::get('/API/PayPal/Pay/Status/Fail', 'ControllerPayment@PayPalFail');
Route::get('/API/PayPal/Pay/Status/Success', 'ControllerPayment@PayPalSuccess');

Auth::routes();