<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cim extends Model
{
    use HasFactory;
    protected $table = 'cim';
    public $timestamps = false; 
    
    protected $fillable = [
        'kapcsolat_id',
        'cim_cime', 
        'cim_aktiv',
        'cim_letrehozas',
        'cim_mod'
    ];

    public function kapcsolat() {
        return $this->belongsTo(kapcsolat::class);
    }  
}
