<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kothat extends Model
{
    use HasFactory;
    protected $table = 'kothat';
    public $timestamps = false; 

    protected $fillable = [
        'hatarnap_id',
        'kot_id',
        'kothat_letrehozas',
        'kothat_mod'
    ];
    
    public function esemenyek() {
        return $this->hasMany(esemeny::class); 
    }

    public function kotelezettseg() {
        return $this->belongsTo(kotelezettseg::class);
    }
    public function hatarnap() {
        return $this->belongsTo(hatarnap::class);
    } 
}
