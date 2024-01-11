<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'biography'
        // Add other fields that you want to allow for mass assignment
    ];
}
