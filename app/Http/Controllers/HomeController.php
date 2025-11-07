<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;
use App\Models\WhyChoose;
use App\Models\Service;
use App\Models\Faq;
use App\Models\Blog;
use App\Http\Controllers\CommonController;

class HomeController extends CommonController
{
    public function index()
    {
        $reasons = WhyChoose::select("id","name")->where("is_active",1)->get();
        $services = Service::select("id","name")->where("is_active",1)->get();
        $faqs = Faq::select("question","answer")->where("is_active",1)->get();
        $blogs = Blog::select("title","slug")->where("is_active",1)->get();
        return view('index',compact('reasons','services','faqs','blogs'));
    }
}
