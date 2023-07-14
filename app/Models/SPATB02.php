<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// table type-contrat
class SPATB02 extends Model
{
    use HasFactory;

    protected $table='spatb02';

    protected $fillable = [
        'idTypeContrat',
        'LibTypeContrat'
    ];
}
