<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPATB40 extends Model
{
    use HasFactory;

    protected $table = 'SPATB40';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'idPers',
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
