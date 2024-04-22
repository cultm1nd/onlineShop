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

//signin
Route::get('/login', function()
{
    if(Auth::check())
    {
        return redirect('/katalog');
    }
    return view('login'); 
});
//reg
Route::get('/reg', function () {
    if(Auth::check())
       {
           return redirect('/katalog');
       }
   return view('registration');
});
//exit
Route::get('/logout',function(){
   Auth::logout();
   return redirect(to:'/');
})->name(name:'logout');

