<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use App\Models\Evaluations;
use App\Models\UEs;
use Illuminate\Http\Request;

class EvaluationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluations = Evaluations::all();

        return view('evaluations.index',compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $UEs = UEs::all();

        $etudiants = Etudiants::all();

        return view('evaluations.create')->with('etudiants', $etudiants)->with('UEs', $UEs);

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
            'u_e_id',
            'etudiant_id',
            'date',
            'heure',
            'durree',
            'note'
        ]);
        Evaluations::create($request->all());

        return redirect()->route('evaluations.index')
            ->with('success','Evaluation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluations $evaluation)
    {
        return view('evaluations.show',compact('evaluation'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluations $evaluation)
    {
        $UEs = UEs::all();

        $etudiants = Etudiants::all();

        return view('evaluations.edit',compact('evaluation'))->with('etudiants', $etudiants)->with('UEs', $UEs);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluations $evaluation)
    {
        $request->validate([
            'u_e_id',
            'etudiant_id',
            'date',
            'heure',
            'durree',
            'note'

        ]);
        $evaluation->update($request->all());

        return redirect()->route('evaluations.index')
            ->with('success','Evaluation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluations $evaluation)
    {
        $evaluation->delete();

        return redirect()->route('evaluations.index')
            ->with('success','Evaluation deleted successfully');
    }
}
