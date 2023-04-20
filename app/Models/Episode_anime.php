<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Episode_anime extends Model
{
    use HasFactory;

    protected $fillable = [
            'season_id',
            'episode_name',
            'imdb_episode',
            'duration',
            'quality',
            'server_1',
            'server_2',
            'server_3',
            'server_4',
            'server_5',
            'server_6',
            'status',
            'views',
            'slug',
            'download_link_1',
            'download_link_2',
            'download_link_3',
            'user_name',
    ];
    public function season_anime(){

        return $this->belongsTo(Season_anime::class);
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

            $max = static::whereName($episode_name)->latest('id')->skip(1)->value('slug');

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
