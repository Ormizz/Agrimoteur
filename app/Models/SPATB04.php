<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//table etre
class SPATB04 extends Model
{
    use HasFactory;

    protected $table='spatb04';

    protected $fillable = [
        'idEtre',
        'idContrat',
        'idTypeContrat',
        'MntContratAvance'
    ];
}
