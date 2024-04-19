<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {return view('aboutUs');});
Route::get('/katalog', function () {return view('katalog');});
Route::get('/where', function () {return view('where');});
Route::get('/korzina', function () {return view('korzina');});
Route::get('/login', function () {return view('login');});
Route::get('/reg', function () {return view('registration');});

Route::name('user.')->group(function()
{
    Route::view('/private','private')->middleware(middleware:'auth')->name(name:'private');
    
    Route::get('/login',function(){
        if(Auth::check())
        {
            return redirect(route(name:'user.private'));//redirect, т е если авторизованы, то перекидывает автоматом на приват
        }
        return view(view:'login');
    })->name(name:'login');

    Route::post('/login',[UserController::class,'login']);//форма методом пост отправляет данные

//get вывод view, post обработка
    Route::get('/logout',function()
    {
    Auth::logout();
    return redirect(to:'/');
  })->name(name:'logout');//разлогин юзера

  Route::get('/reg', function(){
    if(Auth::check())
    {
        return redirect(route(name:'user.private'));//redirect, т е если авторизованы, то перекидывает автоматом на приват
    }
    return view(view:'registration');
  })->name(name:'reg');

  Route::post('/reg',[UserController::class, 'save']);
});