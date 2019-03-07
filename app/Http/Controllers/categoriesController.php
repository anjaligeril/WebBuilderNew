<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function insertCategory($site_id){

        $cat_name=$_GET['category_name'];
        $cat_desc=$_GET['category_desc'];
        $category=new Category();
        $category->site_id=$site_id;
        $category->category_name=$cat_name;
        $category->category_description=$cat_desc;
        $category->save();
        return back()->with('success', 'Category added successfully');
    }

    public function showCategories($site_id){
        $allCategories=Category::where('site_id',$site_id)->get();

        return view( 'showCategories')->with (['categories'=>$allCategories,'site_id'=>$site_id]);

    }

    public function deleteCategory($category_id){
        Category::destroy($category_id);
        return back()->with('success', 'Customer deleted successfully');
    }

    public function updateCategoryBefore($category_id,$site_id){
        $selectedCategory=Category::find($category_id);
        return view('updateCategoryInfo')->with(['updateCategory'=>$selectedCategory,'site_id'=>$site_id]);
    }

    public function updateCategoryAfter($category_id,$site_id){

        $cat_name=$_GET['category_name'];
        $cat_desc=$_GET['category_desc'];
        $category=Category::find($category_id) ;
        $category->site_id=$site_id;
        $category->category_name=$cat_name;
        $category->category_description=$cat_desc;
        $category->save();
        return back()->with('success', 'Category added successfully');
    }

}
