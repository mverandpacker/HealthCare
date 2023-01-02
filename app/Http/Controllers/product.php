<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\cusProduct;
use App\Models\productBenefit;
use DB;
use Session ;
class product extends Controller
{
    public function custproduct(){
        return view('product.addproduct');
    }
    public function addProduct(Request $request){
        $product = new cusProduct;
        $product->Title = $request['tittle'];
        $product->Photo = $request->photo->getClientOriginalName();
        $upload = $request->file('photo')->move('product',$product->Photo);
        $product->Price = $request['price'];
        $product->Amaazon_Link = $request['amazlink'];
        $product->Flipkart_Link = $request['fliplink'];
        $product->Benefit_tittle = $request['benefit'];
        // $product->Benefit_photo = $request['benefitPhoto'];
        $product->Benefit_photo = $request->benefitPhoto->getClientOriginalName();
        $upload = $request->file('benefitPhoto')->move('benefit',$product->Benefit_photo);
        $product->Benefit_Description = $request['benefitdescription'];
        $product->Benefit_tittle_2 = $request['benefit1'];
        $product->Benefit_photo_2 = $request->benefitPhoto1->getClientOriginalName();
        $upload = $request->file('benefitPhoto1')->move('benefit',$product->Benefit_photo_2);
        $product->Benefit_Description_2 = $request['benefitdescription1'];
        //benefit----------33333333333-------
        $product->Benefit_tittle_3 = $request['benefit3'];
        $product->Benefit_photo_3 = $request->benefitPhoto3->getClientOriginalName();
        $upload = $request->file('benefitPhoto3')->move('benefit',$product->Benefit_photo_3);
        $product->Benefit_Description_3 = $request['benefitdescription3'];


        $product->Description = $request['description'];
        $product->save();
        return redirect()->route('allproduct');
    }
    public function AllProduct(){
        $product = cusProduct::all();
        $data = compact('product');
        return view('product.allproduct')->with($data);
    }
    public function editproduct($id){
        $product = cusProduct::find($id);
        $data = compact('product');
        return view('product.edit')->with($data);
    }
    public function updateProduct(Request $request){
        $product = cusProduct::find($request->id);
        $product->Title = $request['tittle'];
        $product->Photo = $request->photo->getClientOriginalName();
        $upload = $request->file('photo')->move('product',$product->Photo);
        $product->Price = $request['price'];
        $product->Amaazon_Link = $request['amazlink'];
        $product->Flipkart_Link = $request['fliplink'];
        $product->Benefit_tittle = $request['benefit'];
        // $product->Benefit_photo = $request['benefitPhoto'];
        $product->Benefit_photo = $request->benefitPhoto->getClientOriginalName();
        $upload = $request->file('benefitPhoto')->move('benefit',$product->Benefit_photo);
        $product->Benefit_Description = $request['benefitdescription'];
        //benefit------2222222----------
        $product->Benefit_tittle_2 = $request['benefit1'];
        $product->Benefit_photo_2 = $request->benefitPhoto1->getClientOriginalName();
        $upload = $request->file('benefitPhoto1')->move('benefit',$product->Benefit_photo_2);
        $product->Benefit_Description_2 = $request['benefitdescription1'];
        //benefit----------33333333333-------
        $product->Benefit_tittle_3 = $request['benefit3'];
        $product->Benefit_photo_3 = $request->benefitPhoto3->getClientOriginalName();
        $upload = $request->file('benefitPhoto3')->move('benefit',$product->Benefit_photo_3);
        $product->Benefit_Description_3 = $request['benefitdescription3'];

        $product->Description = $request['description'];
        $product->save();
        return redirect()->route('allproduct')->with('message','Update successfully');
    }
    public function deleteProduct($id){
        $product = cusProduct::find($id);
        if(!is_null($product)){
            $product->delete();
        }
        return redirect()->back();
    }
    public function viewProduct($id){
        
        $viewProduct = DB::table('product')
                        ->select('product.*')
                        ->where('product.id','=',$id)
                        ->get();
          $data = compact('viewProduct');          
        return view('product.viewproduct')->with($data);
    }
    //----------benefit--------------
    public function Benefit($id){
        $product = cusProduct::find($id);
        $data = compact('product');
        return view('product.addBenefit')->with($data);
    }
    public function addbenefit(Request $request){
        $benefit = new productBenefit;
        $benefit->Product_Id = $request['productid'];
        $benefit->Title = $request['tittle'];
        // $benefit->Photo = $request['photo'];
        $benefit->Photo = $request->photo->getClientOriginalName();
        $upload = $request->file('photo')->move('benefit',$benefit->Photo);
        $benefit->Description = $request['benefitdescription'];
        $benefit->save();
       return redirect()->route('allbenefit');
    }
    public function Allbenefit(){
        $benefit = productBenefit::all();
        $data = compact('benefit');
        return view('product.allbenefit')->with($data);
    }
    public function Editbenefit($id){
        $benefit = productBenefit::find($id);
        $data = compact('benefit');
        return view('product.editbenefit')->with($data);
    }
    public function updateBenefit(Request $request){
        $benefit = productBenefit::find($request->id);
        $benefit->Product_Id = $request['productid'];
        $benefit->Title = $request['tittle'];
        // $benefit->Photo = $request['photo'];
        $benefit->Photo = $request->photo->getClientOriginalName();
        $upload = $request->file('photo')->move('benefit',$benefit->Photo);
        $benefit->Description = $request['benefitdescription'];
        $benefit->save();
        return redirect()->route('allbenefit')->with('message','Update successfully');
    }
    public function deletebenefit($id){
        $benefit = productBenefit::find($id);
        if(!is_null($benefit)){
            $benefit->delete();
        }
        return redirect()->back();
    }
}
