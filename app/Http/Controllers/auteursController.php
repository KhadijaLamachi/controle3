<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Auteur;
use App\Models\Livre;

class auteursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $auteur = Auteur::with(['livres'=>function($q){
//              $q->select('nom','prenom');
        // }])->find(15);
        // return view('index',['auteur'=>$auteur]);
        $auteurs = Auteur::all();
        return view('oneToMany.index',['auteurs'=>$auteurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $livres = Auteur::find($id)->livres;
        return view('oneToMany.show',['livres'=>$livres]);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $auteur = Auteur::find($id);
        $auteur->delete();
        return redirect('/auteurs');
    }
}
