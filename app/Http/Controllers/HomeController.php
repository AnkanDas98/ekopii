<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutFeature;
use App\Models\AboutGallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $about = About::first();
        $aboutFeatures = AboutFeature::orderBy('id', 'ASC')->limit(10)->get();
        return view('frontend.home', compact('about', 'aboutFeatures'));
    }

    public function showAbout(){
        $about = About::first();
        $galleyImages = AboutGallery::all();
        return view('frontend.about', compact('about','galleyImages'));
    }
}
