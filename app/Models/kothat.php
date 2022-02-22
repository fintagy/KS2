<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kothat extends Model
{
    use HasFactory;
    protected $table = 'kothat';
    public $timestamps = false; 

    protected $fillable = [
        'hatarnap_id',
        'kotelezettseg_id',
        'kothat_letrehozas',
        'kothat_mod'
    ];
    
    public function esemenyek() {
        return $this->hasMany(Esemeny::class); 
    }

    public function kotelezettseg() {
        return $this->belongsTo(Kotelezettseg::class);
    }

    public function hatarnap() {
        return $this->belongsTo(Hatarnap::class);
    }
}
