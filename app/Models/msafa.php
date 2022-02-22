<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Msafa extends Model
{
    use HasFactory;
    protected $table = 'msafa';
    public $timestamps = false; 
    
    protected $fillable = [
        'msafa_kod',
        'msafa_leiras',
        'msafa_letrehozas',
        'msafa_mod'
    ];
    
    public function maganszemelyek() {
        return $this->hasMany(Maganszemely::class); 
    }
}
