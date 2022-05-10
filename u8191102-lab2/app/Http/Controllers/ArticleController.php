<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Http\Filters\ArticleFilter;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAll(ArticleFilter $request)
    {
      
        $articles = Article::with('tags')->filter($request)->paginate(20);

        return view('articles' , compact('articles'));
    }
}
