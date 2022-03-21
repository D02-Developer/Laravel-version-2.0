<?php

use App\Http\Controllers\EmployeeController;
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

// Route::resource("/employee", EmployeeController::class);

Route::get('/', function () {
    return view('employees.login');
});

Route::view('/register', 'employees.register'); 

// Route::view('/login', 'employees.login');

Route::post('/register', [EmployeeController::class, 'register']);

Route::post('/login', [EmployeeController::class, 'login']);

// Route::get('/home', [EmployeeController::class, 'index']);
Route::view('/create', 'employees.create');
Route::post('/create', [EmployeeController::class, 'store']);
Route::get('/delete/{id}', [EmployeeController::class, 'destroy']);
Route::get('/edit/{id}', [EmployeeController::class, 'edit']);
Route::post('/edit/{id}', [EmployeeController::class, 'update']);
Route::get('/logout', function () {
    if (session()->has('email')) {
        session()->pull('email', null);
    }
    return redirect('/');
});

// Route::group(['middleware' => 'disable_back_btn'], function () {
//     Route::get('/', function () {
//         return view('employees.login');
//     });
//     Route::get('/home', [EmployeeController::class, 'index']);
// });
