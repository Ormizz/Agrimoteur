<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//table Plantation
class SPATB11 extends Model
{
    use HasFactory;

    protected $table='spatb11';

    protected $fillable=[
        'LibPlantation'
    ];
}
