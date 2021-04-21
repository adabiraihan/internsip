<?php

#Masih Ada Bug

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerLogin{
   $admin = DB::table('admin')->where('username,$request->username')->first(); 
   $pelamar =DB::table('pelamar')->where('')
   if($admin){
        if(check($request->password, $admin->password)){
            return redirect('/ViewsHome')
        }
    }
}
