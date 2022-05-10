<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tags';

    use HasFactory;
    public $timestamps = false;

    public function articles()
    {
        return $this->belongsToMany('App\Models\Article', 'article_tags');
    }
}
