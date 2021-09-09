<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Serie extends Model
{
    use HasFactory;

    public function genres(){

        return $this->belongsToMany(Genre::class);
    }


    public function seasons(){

        return $this->hasMany(Season::class);
    }

    public function episodes(){

        return $this->hasManyThrough(Episode::class, Season::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($serie) {

            $serie->slug = $serie->createSlug($serie->serie_name);

            $serie->save();
        });
    }
    private function createSlug($serie_name)
    {
        if (static::whereSlug($slug = Str::slug($serie_name))->exists()) {

            $max = static::whereName($serie_name)->latest('id')->skip(1)->value('slug');

            if (isset($max[-1]) && is_numeric($max[-1])) {

                return preg_replace_callback('/(\d+)$/', function ($mathces) {

                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }
}
