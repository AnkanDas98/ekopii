<?php

namespace App\Http\Controllers\Admin;

use File;
use Image;
use Carbon\Carbon;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceFeature;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function getServices(){
        $services = Service::latest()->get();
        return view('admin.service.service_all', compact('services'));
    }

    public function addService(){
        return view('admin.service.service_add');
    }

    public function storeService(Request $request){
        $request->validate([
            'service_title' => 'required|min:2',
            'landing_page_short_description' => 'required|min:2',
            'landing_page_logo' => "required|image|mimes:png,jpg,jpeg,svg",
            'service_image' => "required|image|mimes:png,jpg,jpeg",
            'service_feature_image' => "required|image|mimes:png,jpg,jpeg",
          ]);

          
    
        //   =============for Landing Page logo==================
          $img = $request->file('landing_page_logo');
          $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
          $resizedImg = Image::make($img)->resize(36,49)->save('storage/images/services/home/' .$name_gen);
          $request->landing_page_logo = 'images/services/home/'. $name_gen;

          //   =============for Service Image==================
          $img = $request->file('service_image');
          $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
          $resizedImg = Image::make($img)->resize(1920,400)->save('storage/images/services/service/' .$name_gen);
          $request->service_image = 'images/services/service/'. $name_gen;

          //   =============for Feature Image==================
          $img = $request->file('service_feature_image');
          $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
          $resizedImg = Image::make($img)->save('storage/images/services/feature/' .$name_gen);
          $request->service_feature_image = 'images/services/feature/'. $name_gen;
  
  
          $serviceId = Service::insertGetId([
            'service_title' => $request->service_title,
            'landing_page_short_description' => $request->landing_page_short_description,
            'landing_page_logo' => $request->landing_page_logo,
            'service_image' => $request->service_image,
            'service_feature_image' => $request->service_feature_image,
            'created_at' => Carbon::now(),
          ]);

          foreach ($request->addMoreInputFields as $feature) {      
            if($feature['services'] != ''){   
                ServiceFeature::insert([
                  'service_id' =>  $serviceId,
                  'features' => $feature['services'],
                  'created_at' => Carbon::now(),
                ]);
            }
              }
    
          return redirect()->back()->with('success', 'Service Inserted Successfully');
    }

    public function editService($id){
      $service = Service::where('id', $id)->first();
      $features =  ServiceFeature::where('service_id', $id)->get();

      return view('admin.service.service_edit', compact('service', 'features'));
    }

    public function updateService(Request $request, $id){

      
      $request->validate([
        'service_title' => 'required|min:2',
        'landing_page_short_description' => 'required|min:2',
        'landing_page_logo' => "nullable|image|mimes:png,jpg,jpeg,svg",
        'service_image' => "nullable|image|mimes:png,jpg,jpeg",
        'service_feature_image' => "nullable|image|mimes:png,jpg,jpeg",
      ]);

      $data = Service::findOrFail($id);

      if($request->hasFile('landing_page_logo')){
        
        if(File::exists(public_path('storage/'.$data->landing_page_logo))){
          File::delete(public_path('storage/'.$data->landing_page_logo));
      }

      $img = $request->file('landing_page_logo');
      $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
      $resizedImg = Image::make($img)->resize(36,49)->save('storage/images/services/home/' .$name_gen);
      $request->landing_page_logo = 'images/services/home/'. $name_gen;

      }

      if($request->hasFile('service_image')){
        
        if(File::exists(public_path('storage/'.$data->service_image))){
          File::delete(public_path('storage/'.$data->service_image));
      }

      $img = $request->file('service_image');
      $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
      $resizedImg = Image::make($img)->resize(1920,400)->save('storage/images/services/service/' .$name_gen);
      $request->service_image = 'images/services/service/'. $name_gen;

      }

      if($request->hasFile('service_feature_image')){
        
        if(File::exists(public_path('storage/'.$data->service_feature_image))){
          File::delete(public_path('storage/'.$data->service_feature_image));
      }

      $img = $request->file('service_feature_image');
      $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
      $resizedImg = Image::make($img)->save('storage/images/services/feature/' .$name_gen);
      $request->service_feature_image = 'images/services/feature/'. $name_gen;
      }

      $data->service_title  = $request->service_title;
      $data->landing_page_short_description = $request->landing_page_short_description;
      $data->landing_page_logo = $request->hasFile('landing_page_logo') ? $request->landing_page_logo :$data->landing_page_logo;
      $data->service_image = $request->hasFile('service_image') ? $request->service_image: $data->service_image;
      $data->service_feature_image = $request->hasFile('service_feature_image') ? $request->service_feature_image : $data->service_feature_image;
      $data->save();

      $features = ServiceFeature::where('service_id', $id)->delete();

      foreach ($request->addMoreInputFields as $feature) {      
        if($feature['services'] != ''){   
            ServiceFeature::insert([
              'service_id' =>  $id,
              'features' => $feature['services'],
              'created_at' => Carbon::now(),
            ]);
        }
      }

      return redirect()->route('all.services')->with('success', 'Successfully Updated');
    }

    public function deleteService($id)
    {
      $service = Service::find($id);
        if(File::exists(public_path('storage/'.$service->landing_page_logo))){
            File::delete(public_path('storage/'.$service->landing_page_logo));
        }

        if(File::exists(public_path('storage/'.$service->service_image))){
          File::delete(public_path('storage/'.$service->service_image));
        }

        if(File::exists(public_path('storage/'.$service->service_feature_image))){
          File::delete(public_path('storage/'.$service->service_feature_image));
        }

        $service->delete();

        return redirect()->back()->with('success', 'Deleted Successfully!');
    }
}
