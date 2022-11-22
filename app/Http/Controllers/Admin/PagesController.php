<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact(){
        $contacts = Contact::first();
        return view('admin.pages.contact',compact('contacts'));
    }


    public function contactEdit(){
        $contacts=Contact::first();
        return view('admin.pages.contact-edit',compact('contacts'));
    }

    public function contactUpdate(Request $req ){
       $contact = Contact::first();
        $contact->address=$req->address;
        $contact->phone=$req->phone;
        $contact->email=$req->email;
        $contact->facebook=$req->fb;
        $contact->instagram=$req->instagram;
        $contact->twitter=$req->twitter;
        $contact->linkedin=$req->linkedin;
        $contact->skype=$req->skype;
        $contact->save();
        return redirect()->route('contact');
    }


    public function about(){
        $about = About::first();
        return view('admin.pages.about',compact('about'));
    }


    public function aboutEdit(){
        $about=About::first();
        return view('admin.pages.about-edit',compact('about'));
    }

    public function update(Request $req ){
        $about = About::first();
        $about->text1=$req->text1;
        $about->text2=$req->text2;
        $about->text3=$req->text3;
        $about->title1=$req->title1;
        $about->title2=$req->title2;
        $about->title3=$req->title3;

        if ($req->hasFile('file1')) {
            $about->image1 = fileUpload($req->file1);
        }
        if ($req->hasFile('file2')) {
            $about->image2 = fileUpload($req->file2);
        }
        if ($req->hasFile('file3')) {
            $about->image2 = fileUpload($req->file3);
        }





        $about->save();
        return redirect()->route('admin.about');
    }
}
