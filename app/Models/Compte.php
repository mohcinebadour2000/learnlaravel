<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Publication;

class Compte extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['created_at'];
    protected $fillable = [
        'name',
        'email',
        'biography',
        'password',
        'image',

        // Add other fields that you want to allow for mass assignment
    ];

    public function getImageAttribute($value){
        return $value??'compte/user.png';
    }

    public function publications(){
        return $this->hasMany(Publication::class);
    }
}
