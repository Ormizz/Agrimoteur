<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


 //table Contrat
class SPATB01 extends Model
{
    use HasFactory;

    protected $table='spatb01';

    protected $fillable =[
        'DteContrat',
        'DureeContrat',
        'idParcelle',
        'idTypeContrat'
    ];
 
    public function SPATB15()
    {
        return $this-> belongsto(SPATB15:: class,'idParcelle');
    }

    public function SPATB02()
    {
        return $this->belongsto(SPATB02::class, 'idTypeContrat');
    }
}
