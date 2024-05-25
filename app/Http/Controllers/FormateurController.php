<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formateur;

class FormateurController extends Controller
{
    public function index()
    {
        $formateurs = Formateur::all();
        return view('manyToMany.index', compact('formateurs'));
    }

    public function groupes(Formateur $formateur)
    {
        $groupes = $formateur->groupes;
        return view('manyToMany.groupes', compact('formateur', 'groupes'));
    }
}

