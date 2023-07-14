<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


 //Table produit agricole
class SPATB13 extends Model
{
    use HasFactory;

    protected $table='spatb13';

    protected $fillable=[
        'idProduitAgricole',
        'LibProduitAgricole'
    ];
}
