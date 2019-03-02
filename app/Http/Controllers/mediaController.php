<?php

namespace App\Http\Controllers;

use App\Media_product;
use Illuminate\Http\Request;

class mediaController extends Controller
{
    public function uploadImage(Request $request){
        $this->validate($request, [

            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $path='';

        if($request->hasfile('filename'))
        {

            foreach($request->file('filename') as $image)
            {
                $images=new Media_product();
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $data[] = $name;
                $path=public_path().'/images/'.$name;
                $images->path=$path;
                $images->product_id=1;
                $images->site_id=1;
                $images->save();
            }
        }




        return back()->with('success', 'Your images has been successfully');
    }
}
