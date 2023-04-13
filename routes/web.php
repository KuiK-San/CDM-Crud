<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\ControllerRoutes;

Route::get('/', [ControllerRoutes::class, 'index']);
Route::get('/create/view', [ControllerRoutes::class, 'create']);
Route::post('/create', [ControllerRoutes::class, 'store']);