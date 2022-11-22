<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function searchNews()
    {
        $categories = Category::all();
        $authors = Author::all();
        $news = News::with(['category','author'])->get();
        return view('pages.search', compact('authors','categories', 'news'));
    }


}
