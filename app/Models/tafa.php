<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tafa extends Model
{
    use HasFactory;
    protected $table = 'tafa';
    public $timestamps = false; 
    
    protected $fillable = [
        'ucsoport_id',
        'tafa_kod', 
        'tafa_leiras',
        'tafa_letrehozas',
        'tafa_mod'
    ];

    public function tarsasagok() {
        return $this->hasMany(tarsasag::class); 
    }
}
