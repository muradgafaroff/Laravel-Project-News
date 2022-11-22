<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\DataContact;
use App\Models\Teacher;
use Illuminate\Support\Carbon;
use App\Models\About;
use App\Models\Author;
use App\Models\AboutLatest;
use App\Models\Comment;
use App\Models\Home;
use App\Models\News;
use App\Models\Category;

use App\Models\OurTeam;
use Illuminate\Events\EventServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{







    public function mail(Request $req)
    {

        $subject = $req->subject;
        $email = $req->email;
        $body = $req->body;
        $gmail = 'muradgafaroff@gmail.com';
        Mail::send('main.email', ['body' => $body, 'mail' => $email], function ($message) use ($gmail, $subject) {
            $message->to($gmail)->subject($subject);
        });

        $contact = new DataContact();
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->subject = $req->subject;
        $contact->message = $req->body;
        $contact->save();


        return redirect()->back();

    }





//    public function store(Request $request)
//    {
//        $news = new News();
//
//        $news->name = $request->name;
//
//        $news->category_id = $request->category_id;
//        $news->save();
//
//        return redirect()->route('home');
//
//    }
    public function page($id)
    {


        $news = News::groupBy('category_id')->orderBy('id', 'DESC')->with('category')->limit(6)->get();

        $trendNews = News::groupBy('category_id')->orderBy('view_count', 'DESC')->limit(6)->with('category')->get();
        $category = Category::with('news')->find($id);
        return view('pages.page', compact('news', 'trendNews', 'category'));
    }
}
