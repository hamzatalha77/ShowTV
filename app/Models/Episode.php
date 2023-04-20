<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Episode extends Model
{
    use HasFactory;

    public function season(){

        return $this->belongsTo(Season::class);
    }

    public function serie(){

    return $this->belongsToThrough(Serie::class, Season::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($episode) {

            $episode->slug = $episode->createSlug($episode->episode_name);

            $episode->save();
        });
    }
    private function createSlug($episode_name)
    {
        if (static::whereSlug($slug = Str::slug($episode_name))->exists()) {

            $max = static::whereEpisode_name($episode_name)->latest('id')->skip(1)->value('slug');

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
