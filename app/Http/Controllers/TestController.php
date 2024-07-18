<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Video;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function index() {
        //CÂU 1: Mối quan hệ giữa Article và Comment là 1 - n
        $article = Article::find(4);
        // dd($article->comments);
        //CÂU 2:
        $video = Video::find(1);
        // dd($video->ratings);
        //CÂU 3:
        $comments = Comment::where('user_id', 3)->get();
        // dd($comments);
        //Câu 4
        $averageRating = $article->ratings()->avg('rating');
        // dd($averageRating);
        //CÂU 5
        //Câu 6
    }
}
