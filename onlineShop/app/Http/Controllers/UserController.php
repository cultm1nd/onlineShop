<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;
use App\Models\Korzina;
use App\Models\Korzina_product;

class UserController extends Controller
{
    //reg
    public function SignUp(Request $request){

        $validateFiels = $request->validate([
                'name'=>'required',
                'surname'=>'required',
                'login'=>'required',
                'email'=>'required|email',
                'password'=>'required',
        ]);

        $user = User::where(['login'=>$validateFiels['login'],'email'=>$validateFiels['email']])->first();
        if (!$user) {
        $user = User::create($validateFiels);

            Auth::login($user);
            $this->CreateKorzina();
            return redirect('/korzina');
        }
        return redirect('/register');
    }
//vhod
    public function SignIn(Request $request){
        $foundFields = $request->only(['email','password']);

        if(Auth::attempt($foundFields))
        {
            if (Auth::user()->isAdmin) {
                return redirect('/admin');
            }
            return redirect('/catalog');
        }

        return redirect('/login');
    }
}
