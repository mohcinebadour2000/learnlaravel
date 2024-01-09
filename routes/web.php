<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\informationsController;
 
// App\Http\Controllers\homeController;
// use Illuminate\Support\Facades\Request;



/*
| GET     : lecture
| POST    : ajouter
| PUT     : modification complete ( changer tous nom et prenom )
| PATCH   : modification partielle ( changer seulement le nom ou prenom )
| DELETE  : supprimer
|------------------------------------------------
|  Utilisateur => nom : badour , prenom : mohcine
|
*/



Route::get('/home', [homeController::class, 'index']);


Route::get('/compte', [CompteController::class, 'index']);


Route::get('/informations', [informationsController::class, 'index']);








// Route::get('/test/{nom}/{age}',function(Request $request){
//     return view('test',[
//         'nom'=> $request->nom,
//         'age'=> $request->age,
//     ]);
// });


// Route::get('/salam/{nom}', function (Request $request) {
//     // dd($request->nom);
//     return view('salam',[
//         'nomInView'=>$request->nom,
//         //nomInView howa li kaydouz f hmtl , $request->nom howa li kanrequperiwh mn le lien (/salam/{nom})
//     ]);
// });


// Route::get('/salam/{nom}', function ($nom) {
//     return view('salam',[
//         'nom'=>$nom,
//     ]);
// });

// Route::get('/salam', function () {
//     // $nom = "mohcine";
//     return view('salam',[
//         'nom' => 'badour',
//         'prenom' => 'mohcine',
//         'cours' => ['PHP','JAVASCRIPT','JAVA','PYTHON'],
//     ]);
// });



// Route::view('/mohcine','welcome');



















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
