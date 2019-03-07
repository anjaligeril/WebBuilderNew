<?php

namespace App\Http\Controllers;

use App\site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $check=Site::where('user_id',Auth::User()->id)->count();
        if($check>0){
            $user_id=Auth::User()->id;
            $currentSites=Site::where('user_id',$user_id)->get();

            return view('dashBoard')->with('sites',$currentSites);
        }else{
            return view('addSiteInformation');
        }
      //  return view('home');
    }
}
