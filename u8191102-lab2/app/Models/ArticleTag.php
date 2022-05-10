<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article_tags';

    public $timestamps = false;
    use HasFactory;
}
