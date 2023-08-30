<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use App\Models\Suivres;
use App\Models\UEs;
use Illuminate\Http\Request;

class SuivresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suivres = Suivres::all();

        return view('suivre.index',compact('suivres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $u_es = UEs::all();

        $etudiants = Etudiants::all();

        return view('suivre.create')->with('etudiants', $etudiants)->with('UEs', $u_es);

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
            'etudiant_id',
            'u_e_id',
            'durree',
            'date'
        ]);
        Suivres::create($request->all());

        return redirect()->route('suivre.index')
            ->with('success','Cours suivi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Suivres $suivre)
    {
        return view('suivre.show',compact('suivre'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Suivres $suivre)
    {
        $u_es = UEs::all();

        $etudiants = Etudiants::all();

        return view('suivre.edit',compact('suivre'))->with('etudiants', $etudiants)->with('UEs', $u_es);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suivres $suivre)
    {
        $request->validate([
            'etudiant_id',
            'u_e_id',
            'durree',
            'date'

        ]);
        $suivre->update($request->all());

        return redirect()->route('suivre.index')
            ->with('success','Cours suivi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Suivres $suivre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suivres $suivre)
    {
        $suivre->delete();

        return redirect()->route('suivre.index')
            ->with('success','Cours suivi deleted successfully');
    }
}
