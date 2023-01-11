<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Groupe;
use App\Models\User;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupes=Groupe::all();
        return view('pages.groupe.groupe_list',compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $filieres= Filiere::all();
        $users = User::all();

        return view('pages.groupe.groupe_add',compact('users', 'filieres'));
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
            'fi_id' => 'required',
            'en_id' => 'required',
            'section'=>'required',
            'type'=>'required',
        ]);

        $groupe = new Groupe([

            'fi_id' => $request->get('fi_id'),
            'en_id' => $request->get('en_id'),
            'section' => $request->get('section'),
            'type' => $request->get('type'),

        ]);
        $groupe->save();
        return redirect('/groupe/list')->with('success', 'Groupe saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
