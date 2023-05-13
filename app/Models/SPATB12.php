<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//table produitphyto
class SPATB12 extends Model
{
    use HasFactory;

    protected $table='spatb12';

    protected $fillable=[
        'LibProduitPhyto'
    ];
}
