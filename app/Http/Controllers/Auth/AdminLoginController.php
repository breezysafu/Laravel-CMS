<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware("guest:admin");
    }

    public function index(){
        return view("pages.auth.login");
    }

    public function authenticate($credentials){
        $admin=Auth::guard("admin")->getProvider()->retrieveByCredentials($credentials);
        Auth::guard("admin")->login($admin,false);
    }

    public function login(Request $request){
        $this->validate($request,["username"=>"required","email"=>"required|email","password"=>"required"]);
        $credentials=["username"=>$request->username,"email"=>$request->email,"password"=>$request->password];
        if(Auth::guard("admin")->validate($credentials,false)){
            $this->authenticate($credentials);

            session()->flash("Success", "Welcome Back ".$credentials["username"]);

            return redirect(route("category.index"));
        }

        return back()->with("Error","Username/Email and/or Password are Incorrects")->withInput(["username"=>$request->username,"email"=>$request->email]);

    }
}
