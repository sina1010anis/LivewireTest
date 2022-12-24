<?php

use App\Http\Controllers\Controller;
use App\Http\Livewire\SlotTest;
use App\Http\Livewire\TestComponent;
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

Route::view('/', 'welcome');
Route::get('/bach' , [Controller::class , 'bach']);
Route::get('/{name}', SlotTest::class);
Route::get('/test/item' , [Controller::class , 'index']);
Route::post('/send/axios' , [Controller::class , 'axios']);
