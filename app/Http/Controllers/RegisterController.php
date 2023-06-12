<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title'=>'Register',
            'active'=>'register'
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|min:8|max:255',
            'username'=>['required','unique:users','min:8','max:28'],
            'email'=> 'required|email:dns|unique:users',
            'password'=> 'required|min:8|max:255',
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // Metode lain untuk hashing selain bcrypt
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);

        // $request->session()->flash('success','Registration Successfully, Please Login!');
        // return redirect('login');

        // cara ringkas
        return redirect('login')->with('success', 'Registration Successfully, Please Login!');
    }



}

