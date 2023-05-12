<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//table connecter 
class SPATB49 extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'DteConnexion',
        'HeureDeb',
        'HeureFin',
    ];
}
