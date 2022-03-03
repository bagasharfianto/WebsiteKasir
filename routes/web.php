<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [DashboardController::class,'Index']);


Route::get('Order', [OrderController::class,'Index']);

Route::get('Inventory',[InventoryController::class,'Index']); 
Route::get('Inventory/Add',[InventoryController::class,'Add']); 
Route::post('Inventory',[InventoryController::class,'AddProses']); 
Route::get('Inventory/Edit/{Kode_Barang}',[InventoryController::class,'Edit']); 
Route::patch('Inventory/{Kode_Barang}',[InventoryController::class,'EditProses']); 
Route::delete('Inventory/{Kode_Barang}',[InventoryController::class,'Delete']); 


Route::get('History',[HistoryController::class,'Index']);
Route::get('History/{Kode_Barang}',[HistoryController::class,'Show']); 