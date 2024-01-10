<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Compte;


class CompteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $password = 'your_password';
    // $hashedPassword = Hash::make($password);

/* --------------- 1er methode d'insertion des donnees ----------------- */
            // DB::table('comptes')->insert([
            //     'name' => Str::random(10), // random name with 20 character
            //     'email' => Str::random(5)."@gmail.com",
            //     'password' => Hash::make('password'), //crypter le password
            //     'biography' => Str::random(100),
            // ]);
/* ---------------------------------------------------------------------- */


/* --------------- 2eme methode d'insertion des donnees ----------------- */
            Compte::factory(200)->create();
/* ---------------------------------------------------------------------- */
        

/* --------------- 3eme methode d'insertion des donnees ----------------- */
        // \App\Models\User::factory()->create([
        //             'name' => 'Mohcine badour',
        //             'email' => 'badour.info@gmail.com',
        //             'password' => 'mohcine12345',
        //             'biography' => 'Full stack developer',
        //         ]);
/* ---------------------------------------------------------------------- */
    }
}
