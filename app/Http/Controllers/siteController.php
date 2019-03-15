<?php

namespace App\Http\Controllers;

use App\Site;
use App\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class siteController extends Controller
{
    public function siteRegistration()
    {
    $StoreName=$_GET['store'];
    $Domain=$_GET['Domain'];
    $Ip_add=$_GET['ipAddress'];
    $user_id=Auth::user()->id;

    $currentSite = new Site();

    $currentSite->store_name=$StoreName;
    $currentSite->domain_name=$Domain;
    $currentSite->ip_address=$Ip_add;
    $currentSite->user_id=$user_id;

    $currentSite->save();

        $currentSites=Site::where('user_id',$user_id)->get();
        $ourSites=Site::where('user_id',$user_id)->first();

        $defaultTheme=new Theme();
        $defaultTheme->site_id=$ourSites->id;
        $defaultTheme->site_name=$StoreName;
        $defaultTheme->hero_image_path='/images/ecommerce.jpg';
        $defaultTheme->hero_text='Welcome to Our Site';
        $defaultTheme->save();
        return view('dashBoard')->with('sites',$currentSites);
    }

    public function showCurrentUserSites(){
       $user_id=Auth::User()->id;
       $currentSites=Site::where('user_id',$user_id)->get();

       return view('dashBoard')->with('sites',$currentSites);
    }

}
