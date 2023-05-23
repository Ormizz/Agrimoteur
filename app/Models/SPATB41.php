<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//table Sexe
class SPATB41 extends Model
{
    use HasFactory;

    protected $table = 'SPATB41';

    protected $primaryKey = 'idSexe';

    public $incrementing = false;
    
    protected $keyType = 'string';


    protected $fillable = [
        'idSexe',
        'NatureSexe'
    ];

    public function SPATB40()
    {
        return $this->hasMany(SPATB40::class, 'idSexe');
    }
}
