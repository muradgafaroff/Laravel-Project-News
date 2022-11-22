<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutLatest;
use App\Models\Author;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $about = About::first();

        $authors = Author::all();
        return view('pages.about', compact('about',  'authors'));
    }
}
