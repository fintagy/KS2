<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hatarnap extends Model
{
    use HasFactory;
    protected $table = 'hatarnap';
    public $timestamps = false; 
    
    protected $fillable = [
        'hatn_nap',
        'hatn_aktiv',
        'hatn_letrehozas',
        'hatn_mod'
    ];  

    public function kothatok() {
        return $this->hasMany(Kothat::class); 
    }
}
