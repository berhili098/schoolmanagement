<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\module;
use App\Models\salle;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $users = User::all()->count();
        $modules = module::all()->count();
        $filieres = Filiere::all()->count();
        $salles = salle::all()->count();
        return view('dashboard', compact('users', 'modules', 'filieres', 'salles'));
    }
}
