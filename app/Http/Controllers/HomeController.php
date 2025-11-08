<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;
use App\Models\WhyChoose;
use App\Models\Service;
use App\Models\Faq;
use App\Models\Blog;
use App\Models\Download;
use App\Models\Project;
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

    public function services()
    {
        $services = Service::select("id","name","short_description","slug")->where("is_active",1)->get();
        return view('services',compact('services'));
    }

    public function service($slug)
    {
        $service = Service::where("slug",$slug)->where("is_active",1)->first();
        if(!$service) {
            return redirect()->route('home');
        }
        $services = Service::select("id","name","short_description","slug")->where("is_active",1)->get();
        return view('service',compact('service','services'));
    }

    public function resources()
    {
        $downloads = Download::select("id","name","file")->where("is_active",1)->get();
        $blogs = Blog::select("id","title","banner")->where("is_active",1)->get();
        return view('resources',compact('downloads','blogs'));
    }

    public function projects()
    {
        $projects = Project::select("id","name","avatar")->where("is_active",1)->get();
        return view('projects',compact('projects'));
    }

    public function blogs()
    {
        $blogs = Blog::select("id","slug","title","banner")->where("is_active",1)->get();
        return view('blogs',compact('blogs'));
    }

    public function blog($slug)
    {
        $blog = Blog::where("slug",$slug)->where("is_active",1)->first();
        if(!$blog) {
            return redirect()->route('home');
        }
        $blogs = Blog::where("is_active",1)->get();
        return view('blog',compact('blog','blogs'));
    }
}
