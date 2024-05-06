<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin; // Assurez-vous d'importer le modèle Admin

class AuthenticationController extends Controller
{
    public function loginAdmin(Request $request)
    {
        // Validation des données du formulaire de connexion

        // Authentification de l'administrateur
        if (Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirection vers le tableau de bord de l'administrateur
            return redirect()->route('dashboard');
        }

        // En cas d'échec de l'authentification, redirection vers la page de connexion avec un message d'erreur
        return redirect('/login')->with('error', 'Adresse e-mail ou mot de passe incorrect.');
    }
}
