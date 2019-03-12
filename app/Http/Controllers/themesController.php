<?php

namespace App\Http\Controllers;

use App\Media_product;
use App\Product;
use App\Site;
use App\Theme;
use Illuminate\Http\Request;

class themesController extends Controller
{
    public function setTheme(Request $request,$site_id){
       $site_name=$_POST['site_name'];
       $hero_text=$_POST['hero_text'];

        $this->validate($request, [

            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $path='';

        if($request->hasfile('filename'))
        {

            foreach($request->file('filename') as $image)
            {
                $theme=new Theme();
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
                $path='/images/'.$name;
                $theme->hero_image_path=$path;
                $theme->site_id=$site_id;
                $theme->hero_text=$hero_text;
                $theme->site_name=$site_name;
                $theme->save();
            }
        }
        return back()->with('success', 'theme added successfully');

    }

    public function getTheme($site_id){
        $currentTheme=Theme::where('site_id',$site_id)->first();
        $currentProduct=Product::where('site_id',$site_id)->get();
        return view('basicTheme')->with(['theme1'=>$currentTheme,'site_id'=>$site_id,'products'=>$currentProduct]);

    }
}
