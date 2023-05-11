<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Formation;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
//        $etudiants = Etudiant::with('classe_etudiant.class')->get();
        $etudiants = Etudiant::paginate(15);
        return view('etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'address'=>'required',
            'date_naissance'=>'required'
        ]);

        Etudiant::create([
            'nom' => $validated_data['nom'],
            'prenom' => $validated_data['prenom'],
            'addresse'=>$validated_data['address'],
            'dateNaissance'=>$validated_data['date_naissance']
        ]);

        return redirect()->route('etudiants.index')->with('message', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($codeE)
    {
        $etudiant = Etudiant::with('classe.formation')->where('codeE', $codeE)->first();

        return view('etudiant.show', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etudiants = Etudiant::find($id);
        return view('etudiants.edit', compact('etudiants'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated_data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse'=>'required',
            'dateNaissance'=>'required'
        ]);
        $post = Etudiant::findOrFail($id);
        $post->update($validated_data);

        return redirect()->route('etudiants.index')->with('message', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();
        return view('etudiants.index');
    }
}
