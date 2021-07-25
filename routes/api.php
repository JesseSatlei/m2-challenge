<?php
use App\Http\Controllers\Api\CampaignController;
use App\Http\Controllers\Api\DiscountController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\GroupController;
use App\Http\Controllers\Api\CityController;

// Campanhas
Route::get('campaign', [App\Http\Controllers\Api\CampaignController::class, 'index']);
Route::post('campaign', [App\Http\Controllers\Api\CampaignController::class, 'store']);
Route::get('campaign/{id}', [App\Http\Controllers\Api\CampaignController::class, 'show']);
Route::put('campaign/{id}', [App\Http\Controllers\Api\CampaignController::class, 'update']);
Route::delete('campaign/{id}', [App\Http\Controllers\Api\CampaignController::class, 'destroy']);

// Descontos
Route::get('discount', [App\Http\Controllers\Api\DiscountController::class, 'index']);
Route::post('discount', [App\Http\Controllers\Api\DiscountController::class, 'store']);
Route::get('discount/{id}', [App\Http\Controllers\Api\DiscountController::class, 'show']);
Route::put('discount/{id}', [App\Http\Controllers\Api\DiscountController::class, 'update']);
Route::delete('discount/{id}', [App\Http\Controllers\Api\DiscountController::class, 'destroy']);

// Produtos
Route::get('product', [App\Http\Controllers\Api\ProductController::class, 'index']);
Route::post('product', [App\Http\Controllers\Api\ProductController::class, 'store']);
Route::get('product/{id}', [App\Http\Controllers\Api\ProductController::class, 'show']);
Route::put('product/{id}', [App\Http\Controllers\Api\ProductController::class, 'update']);
Route::delete('product/{id}', [App\Http\Controllers\Api\ProductController::class, 'destroy']);

// Grupos de Cidades
Route::get('group', [App\Http\Controllers\Api\GroupController::class, 'index']);
Route::post('group', [App\Http\Controllers\Api\GroupController::class, 'store']);
Route::get('group/{id}', [App\Http\Controllers\Api\GroupController::class, 'show']);
Route::put('group/{id}', [App\Http\Controllers\Api\GroupController::class, 'update']);
Route::delete('group/{id}', [App\Http\Controllers\Api\GroupController::class, 'destroy']);

// Cidades
Route::get('city', [App\Http\Controllers\Api\CityController::class, 'index']);
Route::post('city', [App\Http\Controllers\Api\CityController::class, 'store']);
Route::get('city/{id}', [App\Http\Controllers\Api\CityController::class, 'show']);
Route::put('city/{id}', [App\Http\Controllers\Api\CityController::class, 'update']);
Route::delete('city/{id}', [App\Http\Controllers\Api\CityController::class, 'destroy']);
