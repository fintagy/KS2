<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ucsoport extends Model
{
    use HasFactory;

    protected $table = 'ucsoport';
    public $timestamps = false; 
    
    protected $fillable = [
        'ucsop_nev',
        'ucsop_letrehozas',
        'ucsop_mod'
    ];  

    public function ugyfelek() {
        return $this->hasMany(Ugyfel::class); 
    }
}
