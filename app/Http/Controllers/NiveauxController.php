<?php

namespace App\Http\Controllers;

use App\Models\Niveaux;
use Illuminate\Http\Request;

class NiveauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveaux = Niveaux::all();

        return view('niveaux.index',compact('niveaux'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('niveaux.create');

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
            'libelet'

        ]);
        Niveaux::create($request->all());

        return redirect()->route('niveaux.index')
            ->with('success','Niveaux created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Niveaux $niveau)
    {
        return view('niveaux.show',compact('niveau'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Niveaux $niveau)
    {
        return view('niveaux.edit',compact('niveau'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Niveaux $niveau)
    {
        $request->validate([
            'libelet'

        ]);

        $niveau->update($request->all());

        return redirect()->route('niveaux.index')
            ->with('success','Niveau updated successfully');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niveaux $niveau)
    {
        $niveau->delete();

        return redirect()->route('niveaux.index')
            ->with('success','Niveaux deleted successfully');
    }
}
