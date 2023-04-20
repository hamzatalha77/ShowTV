<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class anime extends Model
{
    use HasFactory;

    protected $fillable = [
        'anime_name',
        'tags',
        'slug',
        'category_anime',
        'date_release',
        'description',
        'age_classification',
        'country',
        'imdb',
        'views',
        'image_anime',
        'poster_anime',
        'youtube_link',
        'language',
        'user_name',
        'status',
    ];

    public function types()
    {
        return $this->belongsToMany(type::class,'type_anime');
    }


    public function Season_animes(){

        return $this->hasMany(Season_anime::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::created(function ($anime) {

            $anime->slug = $anime->createSlug($anime->anime_name);

            $anime->save();
        });
    }
    private function createSlug($anime_name)
    {
        if (static::whereSlug($slug = Str::slug($anime_name))->exists()) {

            $max = static::whereName($anime_name)->latest('id')->skip(1)->value('slug');

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
