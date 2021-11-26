<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kapcsolat extends Model
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
        return $this->hasMany(cim::class); 
    }
    public function telefonok() {
        return $this->hasMany(telefon::class); 
    }
    public function imelek() {
        return $this->hasMany(imel::class); 
    }

    public function szemely() {
        return $this->belongsTo(szemely::class);
    }
    public function ugyfel() {
        return $this->belongsTo(ugyfel::class);
    }  
}
