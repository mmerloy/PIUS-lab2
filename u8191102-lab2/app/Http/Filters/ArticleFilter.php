<?php

namespace App\Http\Filters;

use App\Models\{Article, ArticleTag, Tag};
use App\Http\Filters\QueryFilter;

class ArticleFilter extends QueryFilter
{

    public function title($search_string = '')
    {
        $this->builder->where('title', 'like', "%{$search_string}%");
    }

    public function character_code($search_string = '')
    {
        $this->builder->where('character_code', 'like', "%{$search_string}%");
    }

    public function article_tags($search_string = '')
    {
        $this->builder->whereHas('tags', function ($query) use ($search_string) {
            $query->where('title', 'like', "%{$search_string}%");
        });
    }
}
