<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $admins = Admin::orderBy("id")->get();
        return view("pages.admin")->with("admins",$admins);
    }

    public function store(Request $request){
        $this->validate($request,["username"=>"required|max:50","email"=>"required|email","password"=>"required","confirmPassword"=>"required"]);

        if($request->password != $request->confirmPassword) {
            session()->flash("Error","Password Does Not Match");
            return back()->withInput(["username"=>$request->username,"email"=>$request->email]);
        }

        $admin = new Admin();
        $admin->username = $request->username;
        $admin->hash_password =Hash::make($request->password);
        $admin->email = $request->email;

        $admin->save();

        session()->flash("success","Admin Registered Successfully");

        return back();
    }
}
