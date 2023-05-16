<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPATB15 extends Model
{
    use HasFactory;
    protected $table = 'SPATB15';

    protected $fillable = [
        'Localisation',
        'idPlanteur',
        'idProdAgricole'
    ];

    public function SPATB10()
    {
        return $this-> belongsto(SPATB10:: class,'idPlanteur');
    }

    public function SPATB13()
    {
        return $this-> belongsto(SPATB13:: class,'idProdAgricole');
    }
   
}
