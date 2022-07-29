<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
/* Código agregado por Manuel */use App\Http\Controllers\OrchardController;
/* Código agregado por Manuel */use App\Http\Controllers\CropController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);

	Route::get('Dashboard', function () {
		return view('Dashboard');
	})->name('Dashboard');

	Route::get('sabias-que', function () {
		return view('sabias que/sabias-que');
	})->name('sabias-que');
	Route::view('prueba', 'sabias que.ver' )->name('sabias-que.show');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('dashexample', function () {
		return view('dashboard-example');
	})->name('dashexample');

	Route::get('mis-cultivos', [CropController::class, 'index'])->name('mis-cultivos');
	Route::get('mi-cultivo/{id}', [CropController::class, 'show'])->name('show.cultivo');

	Route::get('nuevo-cultivo', [CropController::class, 'create'])->name('create.cultivo');
	Route::post('nuevo-cultivo', [CropController::class, 'store'])->name('store.cultivo');

	Route::post('mi-cultivo/actualizar/{id}', [CropController::class, 'update'])->name('update.cultivo');
	Route::post('mi-cultivo/eliminar/{id}', [CropController::class, 'destroy'])->name('destroy.cultivo');




	Route::get('mis-huertos', [OrchardController::class, 'index'])->name('mis-huertos');
	Route::get('mi-huerto/{id}', [OrchardController::class, 'show'])->name('show.huerto');


	Route::get('nuevo-huerto', [OrchardController::class, 'create'])->name('create.huerto');
    Route::post('nuevo-huerto', [OrchardController::class, 'store'])->name('store.huerto');


    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');
