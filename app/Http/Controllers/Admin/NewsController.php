<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function news(){
        $newsCount = News::all()->count();

        $category=Category::all();
        $authors=Author::all();
        $news=News::with('category')->paginate(5);
        return view('admin.pages.news',compact('news','category','authors','newsCount'));
    }
    public function newsAdd(){
        $author =Author::all();

        $category=Category::all();
        return view('admin.pages.news-add',compact('category','author'));
    }

    public function new(Request $req){
        $news= new News();
        $news->title=$req->title;
        $news->description=$req->description;

        $news->category_id=$req->category_id;
        $news->author_id=$req->author_id;


        if ($req->hasFile('file')) {
            $news->image = fileUpload($req->file);
        }



        $news->save();


        return redirect()->route('news');
    }
    public function newsEdit($id){
        $news= News::with(['author','category'])->find($id);
        $category=Category::all();
        $author =Author::all();

        return view('admin.pages.news-edit',compact('news','category','author'));
    }
    public function delete($id){
        News::find($id)->delete();

        return redirect()->back();
    }
    public function trashed(){
        $newsCount = News::onlyTrashed()->count();
        $news=News::onlyTrashed()->orderBy('deleted_at','DESC')->paginate(5);
        $category=Category::onlyTrashed()->orderBy('deleted_at','DESC')->get();
        $authors=Author::onlyTrashed()->orderBy('deleted_at','DESC')->get();
        return view('admin.pages.news-trashed',compact('news','category','authors','newsCount'));
    }
    public function recover($id){
News::onlyTrashed()->find($id)->restore();
return redirect()->back();

    }

    public function hardDelete($id){
        News::onlyTrashed()->find($id)->forceDelete();

        return redirect()->back();
    }
    public function update(Request $req ,$id){
         $news= News::find($id);
        $news->title=$req->title;
        $news->description=$req->description;

        $news->category_id=$req->category_id;
        $news->author_id=$req->author_id;

        if ($req->hasFile('file')) {
            if (File::exists($news->file)) {
                File::delete($news->file);
            }
            $news->image = fileUpload($req->file);
        }

        $news->save();

        return redirect()->route('news');
    }
    public function search(Request $req)
    {
        $newsCount = News::all()->count();
        $category = Category::all();
        $authors = Author::all();
        $news = News::with(['category','author'])
            ->title($req->input('title'))

            ->categorySearch($req->input('category_id'))
            ->authorSearch($req->input('author_id'))
            ->paginate(6);

        return view('admin.pages.news', compact('authors','category', 'news','newsCount'));
    }


}
