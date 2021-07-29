<?php
use App\Http\Controllers\tarefaController2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResources(['apitarefa'=>tarefaController2::class]);