<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jogosultsag extends Model
{   
    use HasFactory;

    protected $table = 'jogosultsag';
    public $timestamps = false; 
    
    protected $fillable = [
        
        'jog_nev',
        'jog_leiras',
        'jog_aktiv',
        'jog_letrehozas',
        'jog_mod'
    ];  

    public function felhasznalok() {
        return $this->hasMany(Users::class); 
    }
}
