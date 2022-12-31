<?php

namespace App\Http\Controllers\Admin;

use Image;
use Carbon\Carbon;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getAllService(){
        $services = Service::latest()->get();
        return view('admin.service.service_all', compact('sliders'));
    }

    public function addService(){
        return view('admin.service.service_add');
    }

    public function storeService(Request $request){
        $request->validate([
            'service_title' => 'required|min:2',
            'landing_page_short_description' => 'required|min:2',
            'service_feature_description' => 'required|min:2',
            'landing_page_logo' => "required|image|mimes:png,jpg,jpeg",
            'service_image' => "required|image|mimes:png,jpg,jpeg",
            'service_feature_image' => "required|image|mimes:png,jpg,jpeg",
          ]);
    
        //   =============for Landing Page logo==================
          $img = $request->file('landing_page_logo');
          $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
          $resizedImg = Image::make($img)->resize(100,100)->save('storage/images/services/land_page_logo/' .$name_gen);
          $request->slider_image = 'services/land_page_logo/'. $name_gen;

          //   =============for Service Image==================
          $img = $request->file('landing_page_logo');
          $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
          $resizedImg = Image::make($img)->resize(100,100)->save('storage/images/services/land_page_logo/' .$name_gen);
          $request->slider_image = 'services/land_page_logo/'. $name_gen;
  
              
          HomeSlider::insert([
            'slider_short_title' => $request->slider_short_title,
            'slider_long_title' => $request->slider_long_title,
            'slider_image' =>  $request->slider_image,
            'status' => 1,
            'created_at'=> Carbon::now()
          ]);
    
          return redirect()->route('all.slider')->with('success', 'Slider Inserted Successfully');
    }
}
