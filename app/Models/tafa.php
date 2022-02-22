<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tafa extends Model
{
    use HasFactory;
    protected $table = 'tafa';
    public $timestamps = false; 
    
    protected $fillable = [        
        'tafa_kod', 
        'tafa_leiras',
        'tafa_letrehozas',
        'tafa_mod'
    ];

    public function tarsasagok() {
        return $this->hasMany(Tarsasag::class); 
    }
}
