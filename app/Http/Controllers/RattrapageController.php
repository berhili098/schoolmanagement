<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\module;
use App\Models\Rattrapage;
use App\Models\salle;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;

class RattrapageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $rattrapages=     Rattrapage::all();
        return view('pages.rattrapage.rattrapage_list',compact('rattrapages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salles= salle::all();
        $groupes=Groupe::all();
        $modules = module::all();



        return view('pages.rattrapage.rattrapage_add',compact('salles', 'groupes', 'modules'));
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
            'date' => 'required',
            'salle' => 'required',
            'groupe' => 'required',
            'module' => 'required',
        ]);

        $rattrapage = new Rattrapage([

            'date' => $request->get('date'),
            'salle_id' => $request->get('salle'),
            'groupe_id' => $request->get('groupe'),
            'module_id' => $request->get('module'),

        ]);
        $rattrapage->save();
        return redirect('/rattrapage/list')->with('success', 'Rattrapage saved!');



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
