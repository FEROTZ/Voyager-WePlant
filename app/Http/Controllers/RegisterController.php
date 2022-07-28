<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('session.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:70'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:5', 'max:250'],
            // 'agreement' => ['accepted']
        ]);
        $attributes['password'] = bcrypt($attributes['password'] );


        session()->flash('Hecho', 'Tu cuenta fue creada.');
        $user = User::create($attributes);
        Auth::login($user); 
        return redirect('/Dashboard');
    }
}
