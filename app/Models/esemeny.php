<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esemeny extends Model
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
        return $this->belongsTo(kothat::class);
    }
    public function ugyfel() {
        return $this->belongsTo(ugyfel::class);
    } 
}
