<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPATB20 extends Model
{
    use HasFactory;
    protected $table = 'SPATB20';

    protected $fillable = [
        'Libemballage',
    ];
   

}
