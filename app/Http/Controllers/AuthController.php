<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
        // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

        // Gère la connexion de l'utilisateur
    public function login(Request $request)
    {
    // Valide les champs du formulaire (email et mot de passe obligatoires)
        $credentials = $request->validate(
            ['email' => 'required|email', 
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

    // Retourne une erreur si l'authentification échoue
        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect.',
        ]);
         
    }
}
