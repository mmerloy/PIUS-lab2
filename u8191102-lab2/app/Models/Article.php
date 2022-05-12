<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Builder};
use App\Http\Filters\QueryFilter;

class Article extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags');
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
        return $filter->apply($builder);
    }
}
