<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $story = new Story();

        $story->id = 1;
        $story->title = 'DC_TEST_1';
        $story->art_date = '2024-08-20';
        $story->tag = 'active';
        $story->content = '<h1>frwrf</h1>';
        $story->pic = null;
        $story->enabled = 1;
        $story->created_at = '2024-08-21 23:43:31';
        $story->updated_at = '2024-08-21 23:43:31';
        $story->deleted_at = null;

        $stories = collect([
            $story
        ]);

        return view('user.story', compact('stories'));
    }


    public function detail()
    {
        $story = new Story();

        $story->id = 1;
        $story->title = 'DC_TEST_1';
        $story->art_date = '2024-08-20';
        $story->tag = 'active';
        $story->content = '<h1>frwrf</h1>';
        $story->pic = null;
        $story->enabled = 1;
        $story->created_at = '2024-08-21 23:43:31';
        $story->updated_at = '2024-08-21 23:43:31';
        $story->deleted_at = null;

        return view('user.story-content', compact('story'));
    }
}
