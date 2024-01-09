<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    //
    public function index(){

        $animals = [
            ['id'=>'0011','type'=>'dogs'],
            ['id'=>'0022','type'=>'cats'],
            ['id'=>'0033','type'=>'birds'],
        ];

        return view('compte',compact('animals'));
    }
    
}
