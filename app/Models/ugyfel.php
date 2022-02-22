<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ugyfel extends Model
{
    use HasFactory;
    protected $table = 'ugyfel';
    public $timestamps = false; 
    
    protected $fillable = [
        'ucsoport_id',
        'ugyf_azonosito',
        'ugyf_leiras', 
        'ugyf_adoszam', 
        'ugyf_kadoszam',
        'ugyf_alapitas',
        'ugyf_aktiv',
        'ugyf_letrehozas',
        'ugyf_mod'
    ];  

    public function esemenyek() {
        return $this->hasMany(Esemeny::class); 
    }
    public function tarsasagok() {
        return $this->hasMany(Tarsasag::class); 
    }
    public function egyenivallalkozok() {
        return $this->hasMany(Egyenivallalkozo::class); 
    }
    public function maganszemelyek() {
        return $this->hasMany(Maganszemely::class); 
    }
    public function szemelyek() {
        return $this->hasMany(Szemely::class); 
    }
    public function kapcsolatok() {
        return $this->hasMany(Kapcsolat::class); 
    }

    public function ucsoport() {
        return $this->belongsTo(Ucsoport::class);
    } 
}
