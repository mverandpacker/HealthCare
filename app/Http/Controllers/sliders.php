<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crusowl;

class sliders extends Controller
{
    public function index(){
        return view('slider.AddSlider');
    }
    public function AddSlider(Request $request){
        $slide = new crusowl;
        $slide->Tittle = $request['tittle'];
        $slide->SubTittle = $request['subTittle'];
        $slide->Description = $request['disc'];
        // $slide->Photo = $request['photo'];
        $slide->Photo = $request->photo->getClientOriginalName();
        $upload = $request->file('photo')->move('slider',$slide->Photo);
        $slide->Link = $request['link'];
        $slide->save();
      return redirect()->route('Allslide');
    }
    public function allSlider(){
        $slider = crusowl::all();
        $data = compact('slider');
        return view('slider.allslide')->with($data);
    }
    public function deleteSlide($id){
        $slider = crusowl::find($id);
        if(!is_null($slider)){
           $slider->delete();
        }
        return redirect()->back();
    }
}
