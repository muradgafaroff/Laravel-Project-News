<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function author(){
        $author=Author::all();
        return view('admin.pages.author',compact('author'));
    }
    public function authorAdd(){
        return view('admin.pages.author-add');
    }
    public function authorEdit($id){
        $author= Author::find($id);

        return view('admin.pages.author-edit',compact('author'));
    }

    public function authorSave(Request $req){
        $author= new Author();
        $author->name=$req->name;
        $author->description=$req->description;
        $author->about=$req->about;



        if ($req->hasFile('file')) {
            $author->image = fileUpload($req->file);
        }





        $author->save();

        return redirect()->route('author');
    }

    public function authorDelete($id){
        Author::find($id)->delete();

        return redirect()->back();
    }


    public function authorUpdate(Request $req, $id){

        $author= Author::find($id);
        $author->name=$req->name;
        $author->description=$req->description;
        $author->about=$req->about;

        if ($req->hasFile('file')) {
            $author->image = fileUpload($req->file);
        }

        $author->save();
        return redirect()->route('author');
    }


}
