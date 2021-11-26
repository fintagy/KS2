<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ugyfel extends Model
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
        return $this->hasMany(esemeny::class); 
    }
    public function tarsasagok() {
        return $this->hasMany(tarsasag::class); 
    }
    public function egyenivallalkozok() {
        return $this->hasMany(egyenivallalkozo::class); 
    }
    public function maganszemelyek() {
        return $this->hasMany(maganszemely::class); 
    }
    public function szemelyek() {
        return $this->hasMany(szemely::class); 
    }
    public function kapcsolatok() {
        return $this->hasMany(kapcsolat::class); 
    }

    public function ucsoport() {
        return $this->belongsTo(ucsoport::class);
    } 
}
