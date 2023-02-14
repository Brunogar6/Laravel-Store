<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tipos = Tipo::all();

        return view('home.index')->with('tipos', $tipos);
    }
}
