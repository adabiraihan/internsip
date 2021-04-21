<?php

#Masih Ada Bug

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerRegistration extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'username' => 'required'
            'nama_pelamar' => 'required',
            'ttl_pelamar' => 'required|email',
            'data_pendidikan' => 'required'
            'email' => 'required',
            'notelp' => 'required',
            'alamat' = > 'required'   
        ]);
        
        $user = User::create(request(['username', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/ViewHome');
    }
}