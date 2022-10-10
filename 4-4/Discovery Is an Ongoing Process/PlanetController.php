<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{

    public function index()
    {
        $users = DB::table('planets')->get();
 
        return view('web', ['planets' => $name]);
    }
}