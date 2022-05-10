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
        // $tagId = Tag::query()->where('title', 'like', "%{$search_string}%")->first()->value('id');
        // $postsIds = ArticleTag::query()->where('tag_id', $tagId)->value('article_id');//->get()->pluck('article_id');

        $articlesId = Tag::query()->where('title', 'like', "%{$search_string}%")->first()->fresh()->articles->pluck("id");

        // if($postsIds == null || $tagId == null)
        //     return;

        $this->builder->whereIn('id', $articlesId);//???
    }
}