<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Compte;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;



class CompteController extends Controller
{
    //
    public function index(){

    //    $comptes = Compte::all();
        //   $comptes = DB::table('comptes')->simplePaginate(15);

        
       $comptes = Compte::paginate(9);

        return view('compte.comptes',compact('comptes'));
    }


    public function show(Request $request){
        
        $id = (int)$request->id;
        $compte = Compte::findOrFail($id);

        // dd($compte);

        // if($compte === NULL){
        //    return abort(404);
        // }

        return view('compte.show',compact('compte'));
    }
    
}
