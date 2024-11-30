<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportException;
use App\Models\Page;
use DB;

class IndexController extends Controller
{
    function index(){
        $data = DB::table(getCurrentLocale()."_pages")->where("id", 1)->first();
        $events = DB::table(getCurrentLocale()."_news")->where("status", "=", "active")->orderBy('series',"asc")->get();
        return view('frontend.pages.home.index', compact('data','events'));
    }

    function about(){
        $data = DB::table(getCurrentLocale()."_pages")->where("id", 2)->first();
        return view('frontend.pages.about.index', compact('data'));
    } 
    
    function careers() {
        $data = DB::table(getCurrentLocale()."_pages")->where("id", 3)->first();
        return view('frontend.pages.careers.index', compact('data'));
    }     

    function contact(){
        $data = DB::table(getCurrentLocale()."_pages")->where("id", 4)->first();
        return view('frontend.pages.contact.index', compact('data'));
    }    
}