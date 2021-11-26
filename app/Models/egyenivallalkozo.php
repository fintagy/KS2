<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class egyenivallalkozo extends Model
{
    use HasFactory;
    protected $table = 'egyenivallalkozo';
    public $timestamps = false; 
    
    protected $fillable = [
        'ugyfel_id',
        'evafa_id',
        'ev_okmnyszam', 
        'ev_statszam',
        'ev_nev',
        'ev_letrehozas',
        'ev_mod'
    ];

    public function ugyfel() {
        return $this->belongsTo(ugyfel::class);
    }    
    public function evafa() {
        return $this->belongsTo(evafa::class);
    }
}
