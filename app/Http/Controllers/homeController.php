<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class homeController extends Controller
{
    //
    public function index(Request $request){
        $users = [
            ['id'=>'1','nom'=>'badour','metier'=>'developer'],
            ['id'=>'2','nom'=>'jamaoui','metier'=>'professeur'],
            ['id'=>'3','nom'=>'azizi','metier'=>'jardiner'],
        ];

        return view('home',compact('users'));
    }
}
