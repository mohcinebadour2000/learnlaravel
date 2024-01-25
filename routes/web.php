<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\LoginController;
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



// Route::name('comptes.')->prefix('comptes')->group(function(){
//     Route::controller(CompteController::class)->group(function(){
//         Route::get('/','index')->name('index');
//         Route::get('/create','create')->name('create');
//         Route::post('/','store')->name('store');
//         Route::delete('/{compte}','destroy')->name('destroy');
//         Route::get('/{compte}/edit','edit')->name('edit');
//         Route::put('/{compte}','update')->name('update');
//         Route::get('/{compte}','show')->where('compte','\d+')->name('show');
//     });
// });


Route::resource('comptes', CompteController::class);
Route::resource('publications', PublicationController::class);



Route::get('/google',function(){
    return redirect()->away('https://www.google.com/');
});


Route::get('/home', [homeController::class, 'index'])->name('homepage');

Route::get('/signin', [LoginController::class, 'show'])->name('login.show');
Route::post('/signin', [LoginController::class, 'signin'])->name('signin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/informations', [informationsController::class, 'index'])->name('informations.index');







// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
