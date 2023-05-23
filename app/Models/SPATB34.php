<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPATB34 extends Model
{
    use HasFactory;
    protected $table = 'SPATB34';

    protected $fillable = [
        'Libelle',
        'idPays'
    ];
    public function SPATB33()
    {
        return $this-> belongsto(SPATB33:: class,'idPays');
    }


};
