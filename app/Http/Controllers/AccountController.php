<?php

namespace App\Http\Controllers;

use App\Http\Requests\account\LoginRequest;
use App\Http\Requests\account\RegisterRequest;
use App\Models\Admin;

class AccountController extends Controller
{
    public function showLogin()
    {
        return view("admin.login");
    }

    public function postLogin(LoginRequest $request){
        $data = $request -> all();

        if (Admin::where('username', $data['username'])->
        where('password', $data['password']) -> exists()) {
            return redirect('/dashboard')
                ->with('data',$data);
        }else{
           return redirect()
               ->back()
               ->with('loginFail','Please check username or password')
               ->withInput();
        }
    }

    public function showRegister()
    {
        return view("admin.register");
    }

    public function register(RegisterRequest $request)
    {
        $existUser = Admin::where('username', '=', $request->input('username')) -> first();
        if ($existUser) {
            return redirect()
                ->back()
                ->with('usernameExist', 'Account Exists')
                ->withInput();
        } else{
            Admin::create($request->all());
            return redirect()
                ->back()
                ->with('success', 'Successfully created a new account');
        }

    }

}
