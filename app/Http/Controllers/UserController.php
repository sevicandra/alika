<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
            $request->validate(
            [
                'name'=>'required|max:255',
                'password'=>'required',
            ]);
        User::create([
            'name'=>$request->name,
            'password'=>Hash::make($request->password),
        ]);
    }

    public function login(Request $request){
        $credentials =$request->validate([
            'name'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/client');
        }

        return back()->with('gagal','LoginFailed');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->intended('');
    }
}
