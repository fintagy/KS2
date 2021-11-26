<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imel extends Model
{
    use HasFactory;
    protected $table = 'imel';
    public $timestamps = false; 
    
    protected $fillable = [
        'kapcsolat_id',
        'imel_cim',
        'imel_aktiv',
        'imel_letrehozas',
        'imel_mod'
    ];

    public function kapcsolat() {
        return $this->belongsTo(kapcsolat::class);
    }
}
