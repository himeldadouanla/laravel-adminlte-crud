<?php

namespace App\Http\Controllers;

use App\Models\Enseignants;
use App\Models\UEs;
use Illuminate\Http\Request;

class UEsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $u_es = UEs::all();

        return view('UEs.index',compact('u_es'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enseigants = Enseignants::all();

        return view('UEs.create')->with('enseignants', $enseigants);

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
            'enseignant_id',
            'libelet',

        ]);
        UEs::create($request->all());

        return redirect()->route('UEs.index')
            ->with('success','UE created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int  $id)
    {
        $u_e= UEs::where('id', $id)->first();

        return view('UEs.show',compact('u_e'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  UEs $u_e
     * @return \Illuminate\Http\Response
     */
    public function edit(int $ueId)
    {
        $enseigants = Enseignants::all();

        $u_e= UEs::where('id', $ueId)->first();
          //  dd($u_e->id);
        return view('UEs.edit',compact('u_e'))->with('u_e',$u_e)->with('enseignants', $enseigants);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UEs $u_e)
    {

        $request->validate([
            'enseignant',
            'libelet' ,
        ]);
        $u_e->update($request->all());

        return redirect()->route('UEs.index')
            ->with('success','UE updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  UEs $u_e
     * @return \Illuminate\Http\Response
     */
        public function destroy(int  $u_eId)
    {
        // delete
        $u_eId = UEs::find($u_eId);
        $u_eId->delete();

        return redirect()->route('UEs.index')
           ->with('success','UE deleted successfully');
    }
}
