<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kottip extends Model
{
    use HasFactory;
    protected $table = 'kottip';
    public $timestamps = false; 
    
    protected $fillable = [
        'kottip_nev',
        'kottip_letrehozas',
        'kottip_mod'
    ];  

    public function kotelezettsegek() {
        return $this->hasMany(kotelezettseg::class); 
    }
}
