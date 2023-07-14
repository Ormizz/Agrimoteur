<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


 //table planteur
class SPATB10 extends Model
{ 
    use HasFactory;

    protected $table='spatb010';

    protected $fillable =[
        'idPlanteur',
        'Nom',
        'Prenom',
        'Adresse',
        'NbreParcelle',
        'idSexe',
        'idPays',
        'idTypeContrat'
      // 'idEncadreur',
    ];
}
