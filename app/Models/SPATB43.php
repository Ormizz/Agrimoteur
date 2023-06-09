<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//table type-utilisateur
class SPATB43 extends Model
{
    use HasFactory;

    protected $table = 'spatb43';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $primaryKey = 'idTypeUtilisateur';

    protected $fillable = [
        'idTypeUtilisateur',
        'LibTypeUtilisateur'
    ];
}
