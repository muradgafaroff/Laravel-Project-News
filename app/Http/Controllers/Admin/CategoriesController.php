<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category(){
        $category=Category::all();
        return view('admin.pages.category',compact('category'));
    }
    public function categoryAdd(){
        return view('admin.pages.category-add');
    }
    public function categoryEdit($id){
        $category= Category::find($id);

        return view('admin.pages.category-edit',compact('category'));
    }

    public function categorySave(Request $req){
        $category= new Category();
        $category->name=$req->name;
        $category->is_home=$req->is_home;
        $category->save();

        return redirect()->route('category');
    }

    public function categoryDelete($id){
        Category::find($id)->delete();

        return redirect()->back();
    }


    public function categoryUpdate(Request $req, $id){

        $category= Category::find($id);
        $category->name=$req->name;
        $category->is_home=$req->is_home;
        $category->save();
        return redirect()->route('category');
    }


}
