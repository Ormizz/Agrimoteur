<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPATB40 extends Model
{
    use HasFactory;

    protected $table = 'SPATB40';

    protected $fillable = [
        'Nom',
        'Prenom',
        'DteNaissance',
        'Status',
        'idSexe',
    ];

    public function sexe()
    {
        return $this->belongsTo(SPATB41::class, 'idSexe');
    }
}
