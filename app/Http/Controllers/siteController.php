<?php

namespace App\Http\Controllers;

use App\Site;
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
    return view('home');
}
}
