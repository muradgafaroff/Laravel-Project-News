<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SingleController extends Controller
{
    public function single($id)
    {
        $post = News::find($id);

        $post->update([
            'view_count' => $post->view_count + 1
        ]);

//        News::where('id', $id)->increment('view_count');
        $news = News::with(['comments'])->find($id);
        $category = Category::orderBy('id')->with('news')->get();
        $trendNews = News::groupBy('category_id')->orderBy('view_count', 'DESC')->limit(6)->with('category')->get();
        return view('pages.single-post', compact('news', 'trendNews', 'category'));
    }

    public function singlePost(Request $req)
    {

        $comment = new Comment();
        $comment->username = $req->username;
        $comment->userphoto = 'person-1.jpg';
        $comment->email = $req->email;
        $comment->date = Carbon::now();
        $comment->news_id = $req->id;
        $comment->description = $req->message;
        $comment->save();
        return redirect()->back();


    }

}
