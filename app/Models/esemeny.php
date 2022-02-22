<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esemeny extends Model
{
    use HasFactory;
    protected $table = 'esemeny';
    public $timestamps = false; 

    protected $fillable = [
        'ugyfel_id',
        'kothat_id',       
        'esem_letrehozas',
        'esem_mod'
    ];
    
    public function kothat() {
        return $this->belongsTo(Kothat::class);
    }
    public function ugyfel() {
        return $this->belongsTo(Ugyfel::class);
    } 
}
