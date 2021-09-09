<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Movie;
use App\Models\Category;

class CategoryModel extends Model
{
    use HasFactory;


    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
