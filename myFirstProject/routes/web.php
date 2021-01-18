<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UsersController;

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
    // echo $name;
    // return view('welcome');
    return redirect("about");
});
// Route::get('/about',[AboutController::class,'index']);
Route::get("users",[UsersController::class,'viewLoad']);
Route::view("header","header");
// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::view("contact","contact");

// Route::get('/about/{name}', [AboutController::class,'index']
    // return view('about');
// );
