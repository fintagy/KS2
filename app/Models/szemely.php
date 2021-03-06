<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szemely extends Model
{
    use HasFactory;
    protected $table = 'szemely';
    public $timestamps = false; 
    
    protected $fillable = [
        'ugyfel_id',
        'szem_beosztas', 
        'szem_vezeteknev',
        'szem_keresztnev',
        'szem_aktiv',
        'szem_letrehozas',
        'szem_mod'
    ];

    public function kapcsolatok() {
        return $this->hasMany(Kapcsolat::class); 
    }

    public function ugyfel() {
        return $this->belongsTo(Ugyfel::class);
    }    
}
