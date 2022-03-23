<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[CarController::class, "index"] );
Route::get("/new-car", [CarController::class, "create"]);
Route::post("/store-car",[CarController::class, "store"]);
Route::get("/edit-car/{id}",[CarController::class, "edit"]);
Route::put("/update-car",[CarController::class, "update"]);
Route::get("/delete-car/{id}",[CarController::class, "destroy"]);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
