<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function upload(){
        return view('UploadView');
    }
    public function save(Request $request){
        if($request->hasFile('image'))
        {
           
            //$originalname = $request->file('image')->getClientOriginalName();
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'),$imageName);
            $img_url='images';
         
            $img_alt= "this is alt text";
         
            Image::create([
                'img_name'=>$imageName,
                'img_url'=> $img_url,
                'img_alt'=>$img_alt
            ]);
            
            return redirect()->back()->with('success','Profile Picture Successfully Uploaded');
        }
        else
        {
            return back()->with('fail','Please Choose a Picture and Try Again');
        }
        
      
        
        // $input['image'] = $imageName;
        // $request->image->move(public_path('images'), $imageName);
        
    }
    public function view(){
        $images = Image::all();
        return view('ViewImage',['imgs'=>$images]);
    }
}
