<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//table Navire
class SPATB35 extends Model
{
    use HasFactory;
    protected $table = 'SPATB35';
    
    protected $fillable = [
        'LibNavire'
    ];
}
