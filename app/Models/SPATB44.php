<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//table Fonctions
class SPATB44 extends Model
{
    use HasFactory;


    protected $table = 'spatb44';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'idFunction',
        'LibFonctions',
    ];
}
