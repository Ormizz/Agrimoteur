<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//table Niveau d'acces
class SPATB45 extends Model
{
    use HasFactory;

    
    protected $table = 'spatb45';

    protected $fillable = [
        'LibNiveauAcces'
    ];
}
