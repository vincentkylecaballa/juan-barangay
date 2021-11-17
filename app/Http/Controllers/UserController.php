<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function store(request $request){
        
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $token=$request->input('_token');

        DB::insert('INSERT INTO users(id,name,email,password,remember_token) VALUES(?,?,?,?,?)',[null,$name,$email,$password,$token]);

        return view('/login');
    }

    public function logs(request $request){
        
        $name=$request->input('name');
        $password=$request->input('password');
        

        $data= DB::select('SELECT ID FROM users WHERE name=? AND password=? ',[$name,$password]);
        
        if(count($data)){
            return redirect('/home');
        }

        else {
            return view('/login');
        }
    }
}
