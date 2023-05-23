<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPATB36 extends Model
{
    use HasFactory;

    protected $table = 'SPATB36';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'idNavire',
        'idVille',
        'NumLettreVoiture',
        'NbrePalette',
        'DteExportation',
    ];

    public function SPATB35()
    {
        return $this->belongsTo(SPATB35::class, 'idNavire');
    }

    public function SPATB34()
    {
        return $this->belongsTo(SPATB34::class, 'idVille');
    }

}
