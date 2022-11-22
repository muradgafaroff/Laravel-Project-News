<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $req)
    {
        $categories = Category::all();
        $authors = Author::all();
        $news = News::with(['category','author'])
            ->title($req->input('title'))
            ->description($req->input('description'))
            ->categorySearch($req->input('category_id'))
            ->authorSearch($req->input('author_id'))
            ->get();

        return view('pages.search', compact('authors','categories', 'news'));
    }

}
