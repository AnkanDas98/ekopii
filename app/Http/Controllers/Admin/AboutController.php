<?php

namespace App\Http\Controllers\Admin;

use Image;
use Carbon\Carbon;
use App\Models\About;
use App\Models\AboutFeature;
use App\Models\AboutGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function getAboutPageSetting(){
        return view('admin.about.about_add');
    }

    public function storeAboutPageSetting(Request $request){

        
      
       $request->validate([
        'short_description' => 'required|min:10',
        'who_we_are' => 'required|min:10',
        'who_us' => 'required|min:10',
        'company_growth' => 'required|min:10',
        'our_mission' => 'required|min:10',
        'our_vision' => 'required|min:10',
        'addMoreInputFields.*.feature' => 'required'
       ]);
     
       About::insert([
        'short_description' => $request->short_description,
        'who_we_are' => $request->who_we_are,
        'who_us' => $request->who_us,
        'company_growth' => $request->who_we_are,
        'owr_mission' => $request->our_mission,
        'owr_vision' => $request->our_vision,
       ]);

       foreach ($request->addMoreInputFields as $feature) {      
        if($feature['feature'] != ''){   
            AboutFeature::insert([
                'feature' => $feature['feature']
            ]);
        }
          }

        if($request->hasFile('image')){
            $images = $request->file('image');

            foreach($images as $image){
                
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

                $resizedImg = Image::make($image)->resize(1024,643)->save('storage/images/gallery/' .$name_gen);
            
                $imgLocation = 'images/gallery/'.$name_gen;
            
                AboutGallery::insert([
                    'image' => $imgLocation,
                    'created_at' => Carbon::now(),
                ]);

            }

        }

        return redirect()->back()->with('success', 'Inserted successfully');
       
    }

    public function editAboutPageSetting(){
        $about = About::first();
        // $galleyImages = AboutGallery::all();
        $aboutFeatures = AboutFeature::orderBy('id', 'ASC')->limit(10)->get();

        return view('admin.about.about_edit', compact('about', 'aboutFeatures'));
    }

    public function updateAboutPageSetting(Request $request, $id){
        $request->validate([
            'short_description' => 'required|min:10',
            'who_we_are' => 'required|min:10',
            'who_us' => 'required|min:10',
            'company_growth' => 'required|min:10',
            'our_mission' => 'required|min:10',
            'our_vision' => 'required|min:10',
           ]);
           About::find($id)->update([
            'short_description' => $request->short_description,
            'who_we_are' => $request->who_we_are,
            'who_us' => $request->who_us,
            'company_growth' => $request->who_we_are,
            'owr_mission' => $request->our_mission,
            'owr_vision' => $request->our_vision,
           ]);

         AboutFeature::truncate();

         foreach ($request->addMoreInputFields as $feature) { 
            if($feature['feature'] != ''){   
                AboutFeature::insert([
                    'feature' => $feature['feature']
                ]);
            }
          }

          return redirect()->back()->with('success', 'Updated Successfully');
    }
}
