<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    //

    public static function getHome()
    {
        $data = [
            'articles' => Article::latestPaginatedArticles(3)
        ];

        return view('home')->with($data);
    }

    public static function getUserRegex(int $id = 0)
    {
        return 'User regex - ' . $id;
    }
}
