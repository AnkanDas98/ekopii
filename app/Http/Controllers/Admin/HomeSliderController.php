<?php

namespace App\Http\Controllers\Admin;

use Image;
use Carbon\Carbon;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class HomeSliderController extends Controller
{
    public function getAllSlider(){
        $sliders = HomeSlider::latest()->get();
        return view('admin.slider.slider_all', compact('sliders'));
    }

    public function addSlider(){
        return view('admin.slider.slider_add');
    }

    public function storeSlider(Request $request){
        $request->validate([
            'slider_short_title' => 'required|min:2|unique:home_sliders,slider_short_title',
            'slider_long_title' => 'required|min:2|unique:home_sliders,slider_long_title',
            'slider_image' => "required|image|mimes:png,jpg,jpeg"
          ]);
    
          $img = $request->file('slider_image');
          $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
          $resizedImg = Image::make($img)->resize(1920,930)->save('storage/images/sliders/' .$name_gen);
          $request->slider_image = 'images/sliders/'. $name_gen;
  
              
          HomeSlider::insert([
            'slider_short_title' => $request->slider_short_title,
            'slider_long_title' => $request->slider_long_title,
            'slider_image' =>  $request->slider_image,
            'status' => 1,
            'created_at'=> Carbon::now()
          ]);
    
          return redirect()->route('all.slider')->with('success', 'Slider Inserted Successfully');
    }

    public function editSlider($id){
        $slider = HomeSlider::find($id);
        return view('admin.slider.slider_edit', compact('slider'));
    }

    public function updateSlider(Request $request, $id){
        $request->validate([
            'slider_short_title' => ['required', 'min:2', 'unique:home_sliders,slider_short_title,'.$id],
            'slider_long_title' => ['required', 'min:4', 'unique:home_sliders,slider_long_title,'.$id],
            'slider_image' => ['nullable', 'image', 'mimes:png,jpg, jpeg'], 
        ],[
          'slider_short_title.unique' => 'Slider Title aready taken',
          'slider_long_title.unique' => 'Slider Long Title  aready taken',
        ]);

        $data = HomeSlider::find($id);

        if($request->hasFile('slider_image')){

            if(File::exists(public_path('storage/'.$data->slider_image))){
                File::delete(public_path('storage/'.$data->slider_image));
            }

            $img = $request->file('slider_image');
            $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            $resizedImg = Image::make($img)->resize(1920,930)->save('storage/images/sliders/' .$name_gen);
            $request->slider_image = 'images/sliders/'. $name_gen;

            $data->slider_short_title = $request->slider_short_title;
            $data->slider_long_title = $request->slider_long_title;
            $data->slider_image = $request->slider_image;
            $data->save();
        }else{
            
            $data->slider_short_title = $request->slider_short_title;
            $data->slider_long_title = $request->slider_long_title;
            $data->save();
        }

        return redirect()->route('all.slider')->with('success', 'Slider updated successfully');
    }

    
  public function updateSliderStaus(Request $request){
    $request->validate([
        'slider_id' => 'required'
    ]);

    $data = HomeSlider::findOrFail($request->slider_id);
    $data->update([
        'status' => $data->status ? 0 : 1
    ]);

    return redirect()->back()->with('success', 'Status Updated Successfully');
 }

    public function deleteSlider($id){
        $slider = HomeSlider::find($id);
        if(File::exists(public_path('storage/'.$slider->slider_image))){
            File::delete(public_path('storage/'.$slider->slider_image));
        }
        $slider->delete();
        return redirect()->back()->with('success', 'Deleted Successfully!');
  
    }
}
