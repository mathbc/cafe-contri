<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AuthCafeContriController extends Controller
{
    public function registrarUsuario() {
        return view('auth.new-register');
    }

    public function salvarRegistro(Request $request) {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:users,email,except,id',
            'tipo' => 'required'
        ]);

        $usuario = new User();

        $usuario->name = $request->get('nome');
        $usuario->email = $request->get('email');
        $usuario->tipo = $request->get('tipo');

        $senha = Hash::make(Str::random(8));

        $usuario->password = $senha;

        $usuario->save();

        return Redirect::route('login')->with('message', 'A sua senha foi enviada ao seu email.');
    }
}
