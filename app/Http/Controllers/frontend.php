<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crusowl;
use App\Models\cusProduct;
use App\Models\Blogad;
use App\Models\partner;
use App\Models\contacts;
use DB;
use Session ;
class frontend extends Controller
{
    public function weclome(){
        $slider = crusowl::all();
        $product = cusProduct::all();
        $blog = Blogad::all();                              
        $data = compact('slider','product','blog');
        return view('welcome')->with($data);
    }
    public function shopsingle($id){
        $product = cusProduct::find($id);
        $related = cusProduct::all();
        $data = compact('product','related');
        return view('pages.Shopsingle')->with($data);
    }
    public function about(){
        return view('pages.About');
    }
    public function shop(){
        $related = cusProduct::all();
        $data = compact('related');
        return view('pages.Shop')->with($data);
    }
    public function partner(){
        return view('pages.partnercontact');

    }
    public function addPartner(Request $request){
        $partner = new partner;
        $partner->Name = $request['name'];
        $partner->Email = $request['email'];
        $partner->City = $request['City'];
        $partner->State = $request['state'];
        $partner->Pincode = $request['pincode'];
        $partner->save();
        return redirect()->back()->with('message','contact add successfully');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function addcontact(Request $request){
        $contact = new contacts;
        $contact->Name = $request['name'];
        $contact->Email = $request['email'];
        $contact->Phone = $request['phone'];
        $contact->Message = $request['message'];
        $contact->save();
        return redirect()->back()->with('message','contact add successfully');
    }
}
