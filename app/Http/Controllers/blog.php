<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogad;

class blog extends Controller
{
    public function blog(){
        return view('blog.addblog');
    }
    public function addblog(Request $request){
        $blog = new Blogad;
        $blog->Title = $request['tittle'];
        $blog->Photo = $request->photo->getClientOriginalName();
        $upload = $request->file('photo')->move('blog',$blog->Photo);
        $blog->Doctor = $request['doctor'];
        $blog->Description = $request['description'];
        $blog->save();
       return redirect()->route('Allblog');
    }
    public function allblog(){
        $blog =  Blogad::all();
        $data = compact('blog');

        return view('blog.allblog')->with($data);
    }
    public function editblog($id){
        $blog = Blogad::find($id);
        $data = compact('blog');
        return view('blog.editblog')->with($data);
    }
    public function updateblog(Request $request){
        $blog = Blogad::find($request->id);
        $blog->Title = $request['tittle'];
        $blog->Photo = $request->photo->getClientOriginalName();
        $upload = $request->file('photo')->move('blog',$blog->Photo);
        $blog->Doctor = $request['doctor'];
        $blog->Description = $request['description'];
        $blog->save();
        return redirect()->route('Allblog')->with('message','Update successfully');
    }
    public function deleteblog($id){
        $blog = Blogad::find($id);
        if(!is_null($blog)){
            $blog->delete();
        }
        return redirect()->back();
    }
}
