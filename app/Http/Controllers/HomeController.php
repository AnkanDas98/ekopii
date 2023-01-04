<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\About;
use App\Models\Contact;
use App\Models\Service;
use App\Models\AboutFeature;
use App\Models\AboutGallery;
use Illuminate\Http\Request;
use App\Models\ServiceFeature;

class HomeController extends Controller
{
    public function index(){

        $about = About::first();
        $aboutFeatures = AboutFeature::orderBy('id', 'ASC')->limit(10)->get();
        $services = Service::orderBy('id', 'ASC')->limit(6)->get();
        return view('frontend.home', compact('about', 'aboutFeatures', 'services'));
    }

    public function showAbout(){
        $about = About::first();
        $galleyImages = AboutGallery::all();
        return view('frontend.about', compact('about','galleyImages'));
    }

    public function showService($id){
        $service = Service::where('id', $id)->first();
        $serviceFeature = ServiceFeature::where('service_id', $id)->get();
        return view('frontend.service', compact('service','serviceFeature'));
    }


    public function postContact(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:7'
        ]);
        
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);

        return response()->json([
            'success' => 'Your message has been sent. Thank you!'
        ]);
    }
}
