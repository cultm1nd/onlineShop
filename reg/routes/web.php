<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', 'index');

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
  // Route::post('/login'[])//форма методом пост отправляет данные
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

  Route::post('/reg',[RegisterController::class, 'save']);
});

