<?php

namespace App\Http\Controllers;
use App\Casal;
use App\Ciutat;
use Illuminate\Http\Request;

class CasalController extends Controller
{
    public function crearcasal(){
        
        $todos = Ciutat::get();
        var_dump($todos);
        //return view('anadir', compact('todos'));
    }

    public function index(){
        // DB::table('ciutats')->select('nom')->get();
        $todos = Casal::get();
        return view('home',  compact('todos'));
    }

    public function anadircasal(Request $request){
        $crear = new Casal;
        $crear ->nom = $request->nom;
        $crear ->data_inici = $request->data_inici;
        $crear ->data_final = $request->data_final;
        $crear ->n_places = $request->n_places;
        $crear ->id_ciutat = $request->id_ciutat;
        $crear -> save();
        return back();
    }
}
