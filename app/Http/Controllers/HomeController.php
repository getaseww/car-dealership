<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Car;
use App\House;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $houses=House::where('is_approved','=',1)->orderBy('created_at','desc')->take(6)->get();
        $cars=Car::where('is_approved','=',1)->orderBy('created_at','desc')->take(6)->get();
        return view('welcome')->with('cars',$cars)->with('houses',$houses);
                              
    }

    public function userdash(){
        $user=Auth::user();
        $cars=Car::where('is_approved','=',0)->where('user_id','=',$user->id)->get();
        $pending_cars=count($cars);
        $houses=House::where('is_approved','=',0)->where('user_id','=',$user->id)->get();
        $pending_houses=count($houses);
       return view('users.dashboard')->with('pending_houses',$pending_houses)->with('pending_cars',$pending_cars);
    }
}
