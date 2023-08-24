<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Testimony;
use App\Models\WebConfig;

class LandingPageController extends Controller
{
    function index()
    {
        $data['blogs'] = Blog::take(3)->orderBy('created_at', 'desc')->get();
        $data['testimonies'] = Testimony::take('3')->inRandomOrder()->get();

        return view('landing-page.index', $data);
    }

    function about()
    {
        return view('landing-page.about');
    }

    function blogs()
    {
        return view('landing-page.blogs');
    }

    function blogDetail()
    {
        return view('landing-page.blog-detail');
    }

    function contact()
    {
        return view('landing-page.contact');
    }

    function privacyPolicy()
    {
        $data['web'] = WebConfig::first();
        return view('landing-page.privacy-policy', $data);
    }

    function termsAndConditions()
    {
        $data['web'] = WebConfig::first();
        return view('landing-page.terms-and-conditions', $data);
    }
}
