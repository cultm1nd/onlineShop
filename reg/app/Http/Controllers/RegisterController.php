<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request)
    {
        if(Auth::check())
        {
            return redirect(route(name:'user.private'));
        }
$validateFields=$request->validate([
    'email'=>'required|email',
    'password'=>'required',
]);
$user=User::create($validateFields);
if($user)
{
    Auth::login($user);
    return redirect(route(name:'user.private'));
}
return redirect(route(name:'user.login'))->withErrors([
    'formError'=>'ошибка при сохранении пользователя'
]);
    }
}
