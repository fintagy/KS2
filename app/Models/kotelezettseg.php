<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kotelezettseg extends Model
{
    use HasFactory;
    protected $table = 'kotelezettseg';
    public $timestamps = false; 
    
    protected $fillable = [
        'kottip_id',
        'kot_leiras', 
        'kot_szam', 
        'kot_kie',
        'kot_aktiv',
        'kot_letrehozas',
        'kot_mod'        
    ];  

    public function kothatok() {
        return $this->hasMany(kothat::class); 
    }

    public function kottip() {
        return $this->belongsTo(kottip::class);
    }    
}
