<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $titre = 'Accueil';
        
        return view('pages.accueil')->with('titre', $titre);
    }

    public function pageTest(){
        $data = [
            'titre' => 'Test',
            'contenu' => 'Ceci vient de la variable contenu',
            'liste' => ['element1', 'element2', 'element3']
        ];
        return view('pages.test')->with($data);
    }


}
