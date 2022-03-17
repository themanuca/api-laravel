<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apicontroller;

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

Route::get('/',  [apicontroller::class, 'index']);
Route::post('/salvar',[apicontroller::class, 'store']);
Route::get('/editar/{id}',[apicontroller::class,'show']);
Route::put('/up/{id}',[apicontroller::class, 'edit']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
