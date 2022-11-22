<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SlidersController extends Controller
{
    public function slider(){
        $slider = Slider::all();
        return view('admin.pages.slider',compact('slider'));
    }
    public function sliderAdd(){
        return view('admin.pages.slider-add');
    }
    public function sliderEdit($id){
        $slider= Slider::find($id);

        return view('admin.pages.slider-edit',compact('slider'));
    }

    public function sliderSave(Request $req){
        $slider= new Slider();
        $slider->title=$req->title;
        $slider->url=$req->url;
        $slider->description=$req->description;
        if ($req->hasFile('file')) {
            $slider->image = fileUpload($req->file);
        }



        $slider->save();

        return redirect()->route('slider');
    }

    public function sliderDelete($id){
       Slider::find($id)->delete();

        return redirect()->back();
    }


    public function sliderUpdate(Request $req, $id){

        $slider=Slider::find($id);
        $slider->title=$req->title;
        $slider->url=$req->url;
        $slider->description=$req->description;
        if ($req->hasFile('file')) {
            if (File::exists($slider->file)) {
                File::delete($slider->file);
            }
            $slider->image = fileUpload($req->file);
        }



        $slider->save();

        return redirect()->route('slider');
    }
}
