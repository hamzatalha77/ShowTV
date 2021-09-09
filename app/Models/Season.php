<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Season extends Model
{
    use HasFactory;

    public function serie(){

        return $this->belongsTo(Serie::class);
    }

    public function episodes(){

        return $this->hasMany(Episode::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::created(function ($season) {

            $season->slug = $season->createSlug($season->season_name);

            $season->save();
        });
    }
    private function createSlug($season_name)
    {
        if (static::whereSlug($slug = Str::slug($season_name))->exists()) {

            $max = static::whereName($season_name)->latest('id')->skip(1)->value('slug');

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
