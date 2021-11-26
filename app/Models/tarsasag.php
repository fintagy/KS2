<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarsasag extends Model
{
    use HasFactory;
    protected $table = 'tarsasag';
    public $timestamps = false; 
    
    protected $fillable = [
        'ugyfel_id',
        'tafa_id',
        'tars_cegnev', 
        'tars_cegjszam',
        'tars_letrehozas',
        'tars_mod'
    ];

    public function ugyfel() {
        return $this->belongsTo(ugyfel::class);
    }    
    public function tafa() {
        return $this->belongsTo(tafa::class);
    }
}
