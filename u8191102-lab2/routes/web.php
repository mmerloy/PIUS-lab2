<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [ArticleController::class, 'getAllArticles']);

Route::get('/posts/{code}',[ArticleController::class, 'getAllFields']);
