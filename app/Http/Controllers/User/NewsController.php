<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Order;

class NewsController extends Controller
{
    public function index()
    {
        $news = new News();

        $news->id = 1;
        $news->title = 'DC_TEST_1';
        $news->art_date = '2024-08-20';
        $news->tag = 'active';
        $news->content = '<h1>frwrf</h1>';
        $news->pic = null;
        $news->enabled = 1;
        $news->created_at = '2024-08-21 23:43:31';
        $news->updated_at = '2024-08-21 23:43:31';
        $news->deleted_at = null;

        $news = collect([
            $news
        ]);

        return view('user.news', compact('news'));
    }

    public function detail()
    {
        $news = new News();

        $news->id = 1;
        $news->title = 'DC_TEST_1';
        $news->art_date = '2024-08-20';
        $news->tag = 'active';
        $news->content = '<h1>frwrf</h1>';
        $news->pic = null;
        $news->enabled = 1;
        $news->created_at = '2024-08-21 23:43:31';
        $news->updated_at = '2024-08-21 23:43:31';
        $news->deleted_at = null;

        return view('user.news-content', compact('news'));
    }
}
