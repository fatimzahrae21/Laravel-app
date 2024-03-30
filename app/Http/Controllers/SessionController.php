<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function AfficherFormulaire(){
        return view ('newFormulaire');
    }

    public function traiterFormulaire(Request $request){
        $nom = $request->input('nom');
        $email = $request->input('email');

        $request->flash('bienvenue');
    }
}
