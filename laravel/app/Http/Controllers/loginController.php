<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Op_login;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function login(Request $request){
        $user_info=$request->validate([
            'email'=>['required','email'],
            'password' =>['required']
        ]);

        if(Auth::attempt($user_info)){

            $request->session()->regenerate();
            $id = auth()->id();
           
            return redirect()->route('op_home',compact($id));
        }
        return view();
    }

}
