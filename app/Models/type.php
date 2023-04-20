<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    public function animes(){
        return $this->belongsToMany(anime::class,'type_anime');
    }
}
