<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPATB21 extends Model
{
    use HasFactory;
    protected $table = 'SPATB21';

    protected $fillable = [
    'QteProduction',
    'DateProduction',
    'idParcelle',
    'idCalibre'
    ];
    public function SPATB14()
    {
        return $this-> belongsto(SPATB14:: class,'idCalibre');
    }
    public function SPATB15()
    {
        return $this-> belongsto(SPATB15:: class,'idParcelle');
    }
}
