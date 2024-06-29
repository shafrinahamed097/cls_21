<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function(){
  return view('welcome');
});

Route::get("/demo1",[DemoController::class,'demo1']);
Route::post("/demo2",[DemoController::class,'demo2']);
Route::put("/demo3",[DemoController::class,'demo3']);
Route::post("/demo4",[DemoController::class,'demo4']);
