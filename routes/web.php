<?php

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

Route::get('/', function () {
   $product = \App\Models\Product::findOrFail(1);
   $pv = \App\Models\OptionProductValue::all();
//   dd($pv);
//   dd($product->option->first()->pivot->optionValue);

  $data = $product->option()->attach(4);
   dd($data);
});
