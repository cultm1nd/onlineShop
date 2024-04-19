<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $foundFields=$request->only(['email','password']);

        if(Auth::attempt($foundFields))
        {
            return redirect()->intended(route(name: 'user.private'));
        }
        return redirect(route(name:'user.login'))->withErrors([
            'email'=>'Неверный email',
            'password'=>'Неверный password',
        ]);
    }
    public function save(Request $request)
    {
        if(Auth::check())
        {
            return redirect(route(name:'user.private'));
        }
        $validateFields=$request->validate([
        'email'=>'required|email',
        'login'=>'required|email',
        'name'=>'required',
        'surname'=>'required',
        'patronymic'=>'',
        'firstPas'=>'required',
        //'secPas'=>'required',
        ]);
        dump($validateFields);
        return;
        $user=Users::create($validateFields);
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
