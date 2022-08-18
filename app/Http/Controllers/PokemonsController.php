<?php

namespace App\Http\Controllers;

use App\Models\Pokemons;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function home(){
        return view("welcome");
    }
    public function store(Request $request){
        $store = new Pokemons;
        $store->name = $request->name;
        $store->type = $request->type;
        $store->niveau = $request->niveau;
        $store->save();
        return redirect("/");
    }
}
