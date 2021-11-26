<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telefon extends Model
{
    use HasFactory;
    protected $table = 'telefon';
    public $timestamps = false; 
    
    protected $fillable = [
        'kapcslat_id',
        'tel_szam', 
        'tel_aktiv',
        'tel_letrehozas',
        'tel_mod'
    ];

    public function kapcsolat() {
        return $this->belongsTo(kapcsolat::class);
    }
}
