<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\userController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\taskController;


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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/userManagement', function () {
    return view('userManagement');
})->middleware(['admin']);

Route::get('/taskManagement', function () {
    return view('taskManagement');
})->middleware(['admin']);

Route::get('/reportManagement', function () {
    return view('reportManagement');
})->middleware(['admin']);

Route::get('/listUsers', [userController::class, 'index'])->middleware(['admin']);

Route::get('/register', function () {
    return view('auth.register');
})->middleware(['admin'])->name('register');

Route::post('register',[RegisteredUserController::class, 'store'])->middleware(['admin']);

Route::get('/DeleteUpdateUser', [userController::class, 'DeleteUpdateIndex'])->middleware(['admin']);

Route::delete('/DeleteUpdateUsers/{id}', [userController::class, 'destroy'])->middleware(['admin']);

Route::get('updateUser/{id}', [userController::class, 'edit'])->middleware(['admin']);

Route::put('updateUsers/{id}', [userController::class, 'update'])->middleware(['admin']);

Route::get('/listTasks', [taskController::class, 'index'])->middleware(['admin']);

Route::get('/assignTask', [taskController::class, 'create'])->middleware(['admin']);

Route::post('/assignTask',[taskController::class, 'store'])->middleware(['admin']);

Route::get('/DeleteUpdateTask', [taskController::class, 'DeleteUpdateIndex'])->middleware(['admin']);

Route::get('updateTask/{id}', [taskController::class, 'edit'])->middleware(['admin']);

Route::delete('/DeleteUpdateTasks/{id}', [taskController::class, 'destroy'])->middleware(['admin']);

Route::put('updateTasks/{id}', [taskController::class, 'update'])->middleware(['admin']);



