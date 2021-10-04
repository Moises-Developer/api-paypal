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

Route::get('/', 'controladorEmpresa@indexCreate')->name('payment.cancel');

Route::resources([
    '/costumer' => 'ControllerCostumer',
    '/seller' => 'ControllerSeller',
    '/sell' => 'ControllerSell',
    '/car' => 'ControllerCar'
]);

Route::get('/API/PayPal/Pay', 'ControllerPayment@payWithPayPal');
Route::get('/API/PayPal/Pay/Status', 'ControllerPayment@PayPalStatus')->name('payment.success');

Auth::routes();