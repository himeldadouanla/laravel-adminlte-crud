<?php

namespace App\Http\Controllers;

use App\Models\Enseignants;
use Illuminate\Http\Request;

class EnseignantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enseignants = Enseignants::all();

        return view('enseignants.index',compact('enseignants'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enseignants.create');
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
            'nom',
            'prenom',
            'telepone',
            'email',
            'date_prise_fonction',

        ]);
        Enseignants::create($request->all());

        return redirect()->route('enseignants.index')
            ->with('success','Enseignant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Enseignants $enseignant)
    {
        return view('enseignants.show',compact('enseignant'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Enseignants $enseignant)
    {
        return view('enseignants.edit',compact('enseignant'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enseignants $enseignant)
    {
        $request->validate([
            'nom',
            'prenom',
            'telepone',
            'email',
            'date_prise_fonction',

        ]);

        $enseignant->update($request->all());

        return redirect()->route('enseignants.index')
            ->with('success','Ensegnant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enseignants $enseignant)
    {
        $enseignant->delete();

        return redirect()->route('enseignants.index')
            ->with('success','Enseignant deleted successfully');
    }
}
