<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use App\Models\Niveaux;
use Illuminate\Http\Request;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $etudiants = Etudiants::all();

        return view('etudiants.index',compact('etudiants'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveaux = Niveaux::all();

        return view('etudiants.create')->with('niveaux', $niveaux);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'niveau_id',
            'matricule',
            'nom',
            'prenom',
            'date_de_maissance',
            'lieu',
            'telepone',
            'email',
            'annee_scolaire'

        ]);
        Etudiants::create($request->all());

        return redirect()->route('etudiants.index')
            ->with('success','Etudiant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiants $etudiant)
    {

        return view('etudiants.show',compact('etudiant'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiants $etudiant)
    {
        $niveaux = Niveaux::all();


        return view('etudiants.edit',compact('etudiant'))->with('niveaux', $niveaux);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Etudiants $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiants $etudiant)
    {

        $request->validate([
            'niveau_id',
            'matricule' ,
            'nom ',
            'prenom',
            'date_de_maissance',
            'lieu',
            'telepone',
            'email',
            'annee_scolaire'

        ]);
        $etudiant->update($request->all());

        return redirect()->route('etudiants.index')
            ->with('success','Etudiant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiants $etudiant)
    {
        $etudiant->delete();

        return redirect()->route('etudiants.index')
            ->with('success','Etudiant deleted successfully');
    }
}
