<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maganszemely extends Model
{
    use HasFactory;
    protected $table = 'maganszemely';
    public $timestamps = false; 
    
    protected $fillable = [
        'ugyfel_id',
        'msafa_id',
        'ms_adoazonosito', 
        'ms_tajszam',
        'ms_szulhely',
        'ms_szulido',
        'ms_aneve',
        'ms_szigszam',
        'ms_letrehozas',
        'ms_mod'
    ];

    public function ugyfel() {
        return $this->belongsTo(Ugyfel::class);
    }    
    public function msafa() {
        return $this->belongsTo(Msafa::class);
    }
}
