<?php

#Masih Ada Bug

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAuth extends Controller
{
    function adminLogin(Request $req){
        $data = $req->input();

        $result = DB::table('admin')->where('username', $dataa['username'])
                                    ->where('password', md5($data['password']))
                                    ->count();
        
        if($result > 0){
            $req->session()->put('user', $data['username']);
            $req->session()->put('status', $data['LOGGED_IN']);
            $req->session()->put('role', $data['admin']);
            $req->session()->put('token', $data['_token']);
            return redirect('/admin/dashboard');
        }else{
            return redirect('/admin/login')->with(['failed' -> 'Username atau password salah']);
        }
    }

        function userLogin(Request $req){
            $data = $req->input();
            $result = DB::table('users')->where('email', $data['email'])
                                        ->where('password', $data['password'])
                                        ->count();
            if($result > 0){
                $data_user = DB::table('users')->where('email', $data['email'])
                                        ->where('password', md5($data['password']))
                                        ->first();
            
            $req->session()->put('user', $data['username']);
            $req->session()->put('status', $data['LOGGED_IN']);
            $req->session()->put('role', $data['user']);
            $req->session()->put('token', $data['_token']);
            return redirect('/');
            }else{
                return redirect('/login')->with(['failed']-> 'Email atau Password Salah')
            }
        }
}
