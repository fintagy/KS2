<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evafa extends Model
{
    use HasFactory;
    protected $table = 'evafa';
    public $timestamps = false; 
    
    protected $fillable = [
        'evafa_kod', 
        'evafa_leiras',
        'evafa_letrehozas',
        'evafa_mod'
    ];

    public function egyenivallalkozok() {
        return $this->hasMany(egyenivallalkozo::class); 
    }
}
