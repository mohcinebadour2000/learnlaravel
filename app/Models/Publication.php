<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Publication extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'titre',
        'body',
        'image',
        'compte_id',

        // Add other fields that you want to allow for mass assignment
    ];
    public function getImageAttribute($value){
        return $value??'publication/user.png';
    }
}
