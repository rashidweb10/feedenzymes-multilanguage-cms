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
        $events = DB::table(getCurrentLocale()."_news")->where("created_at", ">=", now())->where("status", "=", "active")->orderBy('series',"asc")->get();
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
    
    function events(Request $requets, $lang, $type){
        //return $type;
        if($type == 'upcoming'){
            $years = DB::table(getCurrentLocale()."_news")->select("year")->distinct("year")->where("status", "=", "active")->where("created_at", ">=", now())->orderBy('year', 'desc')->pluck('year');
        }else{
            $years = DB::table(getCurrentLocale()."_news")->select("year")->distinct("year")->where("status", "=", "active")->orderBy('year', 'desc')->pluck('year');
        }
        
        return view('frontend.pages.events.index', compact('years', 'type'));
    }  
    
    function customized_enzymes() {
        $data = DB::table(getCurrentLocale()."_productions")->where("id", 1)->first();
        return view('frontend.pages.productions.customized_enzymes', compact('data'));
    } 
        
    function indivisual_enzymes() {
        $data = DB::table(getCurrentLocale()."_productions")->where("id", 2)->first();
        return view('frontend.pages.productions.indivisual_enzymes', compact('data'));
    }     
}