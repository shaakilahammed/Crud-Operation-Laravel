<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function verify(Request $req){

        if($req->username == "" || $req->password == ""){
            //echo "null submission";
            return back()->with('empty','All fields are required!');
        }elseif($req->username == $req->password){
            return redirect('/home');
        }else{
            return redirect('/login');
        }
    }


    public function logout(){
        return redirect('/login');
    }
}
