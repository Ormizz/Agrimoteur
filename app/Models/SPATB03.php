<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//table modelePaiement
class SPATB03 extends Model
{
    use HasFactory;

    protected $table='spatb03';

    protected $fillable =[
        'LibModelePaiement'
    ];
}
