<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Portfolio;
use App\Models\Client;
use App\Models\Team;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $about = About::first();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $clients = Client::all();

        return view('home.index', compact('sliders','about','services','portfolios','clients',));
    }
    public function about(){
        $about = About::all();
        $clients = Client::all();
        $teams = Team::all();
        
        return view('home.about',compact('about','clients','teams'));
    }
    public function team(){
        $team = Team::all();

        return view('home.team',compact('teams'));
    }
    public function services(){
        $services = Service::all();

        return view('home.services',compact('services'));
    }
    public function contact(){
        $contact = Contact::first();

        return view('home.contact',compact('contact'));
    }
    public function portfolio(){
        $portfolio = Portfolio::all();

        return view('home.portfolio',compact('portfolio'));
    }
    public function testimonials(){
        $testimonials = Testimonial::all();

        return view('home.testimonials',compact('testimonials'));
    }
}
