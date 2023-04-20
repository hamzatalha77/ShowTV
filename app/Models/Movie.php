<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Movie extends Model
{

    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_movie');
    }
    protected static function boot()
    {
        parent::boot();

        static::created(function ($movie) {

            $movie->slug = $movie->createSlug($movie->movie_name);

            $movie->save();
        });
    }
    private function createSlug($movie_name)
    {
        if (static::whereSlug($slug = Str::slug($movie_name))->exists()) {

            $max = static::whereName($movie_name)->latest('id')->skip(1)->value('slug');

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
