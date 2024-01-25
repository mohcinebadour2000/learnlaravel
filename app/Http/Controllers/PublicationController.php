<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Publicationrequest;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;



class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function __construct() {
            $this->middleware('auth')->except(['index']);
    }



    public function index()
    {
        // $publications = Publication::paginate(9);
        $publications = Publication::latest()->paginate(4);
        return view('publication.index',compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('publication.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublicationRequest $request)
    {


        // dd(Auth::user()->name);




        $formFields = $request->validated();
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('publication','public');
        }
        $formFields['compte_id'] = Auth::id();
        Publication::create($formFields);
        return redirect()->route('publications.index')->with('success','Publication ajoutée.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        return view('publication.edit',compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Publication $publication,PublicationRequest $request)
    {

        $formFields = $request->validated();

        // dd($formFields);


        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('publication','public');
        }
        $publication->fill($formFields)->save();
        return redirect()->route('publications.index',$publication->id)->with('success','publication est bien modifiée.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return redirect()->route('publications.index')->with('success','Publication est bien supprimée');
    }
}
