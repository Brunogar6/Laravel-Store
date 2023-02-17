<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use App\Models\Marca;
use App\Models\Produto;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    public function index(string $tipo, Request $request)
    {
        $tipo = Tipo::where('slug', $tipo)->first();
        $tipos = Tipo::all();
        $allMarcas = Marca::all();


        if ($request->has('marca')){

            $marcas = Marca::whereIn('nome', $request->marca)->get();
            $produtos = collect();

            foreach($marcas as $marca) {
                $produtos->add($marca->produtos->first());
            }


            return view('produtos.index')->with(['produtos' => $produtos, 'tipos'=> $tipos, 'marcas' => $allMarcas]);
        }


        return view('produtos.index')->with(['produtos' => $tipo->produtos, 'tipos'=> $tipos, 'marcas' => $allMarcas]);
    }
}
