<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\module;
use App\Models\salle;
use App\Models\User;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = module::all();
        return view("pages.modules.modules_list")->with("modules", $modules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $filieres = Filiere::all();
        $salles = salle::all();
        return view("pages.modules.modules_add")->with("users", $users)->with("filieres", $filieres)->with("salles", $salles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = new module();
        $module->nom_module = $request->nom_module;
        $module->nb_heure = $request->nb_heure;
        $module->ens_id = $request->ens_id;
        $module->fil_id = $request->fil_id;
        $module->sal_id = $request->sal_id;
        $module->save();
        $modules = module::all();
        return view("pages.modules.modules_list")->with("modules", $modules);

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
