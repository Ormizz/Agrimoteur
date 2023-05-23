<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPATB17 extends Model
{
    use HasFactory;
    protected $table = 'SPATB17';

    protected $fillable = [
    'idParcelle',
    'DteHormonage',
    'NbrePlantHormoner',
    'idPhyto',
    'idParcelle'
    ];

    public function SPATB12()
    {
        return $this-> belongsto(SPATB12:: class,'idPhyto');
    }

    public function SPATB15()
    {
        return $this-> belongsto(SPATB15:: class,'idParcelle');
    }
    
    
    
}
