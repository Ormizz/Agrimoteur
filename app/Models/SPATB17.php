<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPATB17 extends Model
{
    use HasFactory;
    protected $table = 'SPATB17';

    protected $fillable = [
    'DateHormonage'
    'NbrePlantHormoner'
    ];
    
}
