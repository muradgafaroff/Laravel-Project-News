<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::orderBy('id')->where('is_home', 1)->with('news')->paginate(1);

        $news = News::groupBy('category_id')->orderBy('id', 'DESC')->with(['category','author'])->limit(6)->get();

        $trendNews = News::groupBy('category_id')->orderBy('view_count', 'DESC')->limit(6)->with(['category','author'])->get();

        $slider = Slider::all();

        return view('pages.home', compact('category', 'slider', 'news', 'trendNews'));

    }

}
