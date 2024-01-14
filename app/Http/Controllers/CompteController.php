<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Compte;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CompteRequest;




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

    public function store(CompteRequest $request){
        // dd($request->name);
        // $users = User::all();
        // Compte::create($request->post());
      // Valider les champs du formulaire
    // $validatedData = $request->validate([
    //     'name' => 'required|string|between:3,30',
    //     'email' => 'required|email|unique:comptes',
    //     'biography' => 'required|string|max:255',
    //     'password' => 'required|between:8,50|confirmed',
    // ]);
    // $hashedPassword = Hash::make($request->input('password'));3
    // $formFields = $request->validated();
    // Compte::create([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'biography' =>  $request->input('biography'),
    //         'password' => Hash::make($request->input('password')),
    //     ]);
    // // Get the uploaded file
    // $imageFile = $request->file('image');
    // // Define the new file name
    // $newFileName = 'custom_name.' . $imageFile->getClientOriginalExtension();
    // // Store the file with the new name in the 'compte' directory within the 'public' disk
    // $formFields['image'] = $imageFile->storeAs('compte', $newFileName, 'public');
    // dd($formFields['password']);
        // dd($request->id);

            $formFields = $request->validated();
            $formFields['password'] = Hash::make($request->input('password'));
            $cleanedName = str_replace(' ', '_', $request->name);
            $newFileName =$request->email . '_image.' . $request->file('image')->getClientOriginalExtension();
            $formFields['image'] = $request->file('image')->storeAs('compte',$newFileName,'public');
            Compte::create($formFields);

        return redirect()->route('comptes.index')->with('success','Votre compte est bien créé');

    }


    public function destroy(Compte $compte){
        // $compte = $request->compte;
        $compte->delete();
        return redirect()->route('comptes.index')->with('success','Card est bien supprimée');
    }

    public function edit(Compte $compte){
        return view('compte.edit',compact('compte'));
    }


    public function update(CompteRequest $request,Compte $compte){

        $formFields = $request->validated();
        $formFields['password'] = Hash::make($request->input('password'));
        $compte->fill($formFields)->save();
        return redirect()->route('comptes.show',$compte->id)->with('success','Compte est bien modifiée.');
    }



}
