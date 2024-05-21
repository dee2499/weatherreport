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
    return view('welcome');
});

use App\Http\Controllers\WeatherController;

Route::get('/', [WeatherController::class, 'showWeatherForm'])->name('weather.form');
Route::post('/weather', [WeatherController::class, 'getWeather'])->name('weather.get');