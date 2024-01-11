<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Compte;
use App\Models\User;
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


    public function show(Compte $compte){

        // $compte = $id;
        // $compte=$compte;
        // dd($compte->email);
        // $id = (int)$request->id;
        // $compte = Compte::findOrFail($id);
        // dd($compte);
        // if($compte === NULL){
        //    return abort(404);
        // }

        return view('compte.show',compact('compte'));
    }



    public function create(){
        return view('compte.create');
    }

    public function store(Request $request){
        // dd($request->name);
        // $users = User::all();
        // Compte::create($request->post());

        $request->validate([
            'name' => 'required|string|between:3,30',
            'email' => 'required|email|unique:comptes',
            'biography' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        Compte::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'biography' =>  $request->input('biography'),
        ]);


        return redirect()->route('comptes.index')->with('success','Votre compte est bien créé');
    }
    
}
