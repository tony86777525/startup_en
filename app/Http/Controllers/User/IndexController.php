<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;

class IndexController extends Controller
{
    public function index()
    {
        $query = new News();

        $news = $query
            ->where('enabled', '=', 1)
            ->orderBy('art_date', 'DESC')
            ->take(6)
            ->get();

        $news = $news->chunk(3);

        return view('user.index', compact('news'));
    }
}
