<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapcsolat extends Model
{
    use HasFactory;
    protected $table = 'kapcsolat';
    public $timestamps = false;

    protected $fillable = [
        'ugyfel_id',
        'szemely_id',
        'kapcs_letrehozas',
        'kapcs_mod'
    ];
    
    public function cimek() {
        return $this->hasMany(Cim::class); 
    }
    public function telefonok() {
        return $this->hasMany(Telefon::class); 
    }
    public function imelek() {
        return $this->hasMany(Imel::class); 
    }

    public function szemely() {
        return $this->belongsTo(Szemely::class);
    }
    public function ugyfel() {
        return $this->belongsTo(Ugyfel::class);
    }  
}
