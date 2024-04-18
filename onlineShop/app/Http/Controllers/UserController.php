<?php

namespace App\Http\Controllers;
use App\Models\User;
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
}
