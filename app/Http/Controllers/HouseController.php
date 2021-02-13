<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use Auth;
use Session;
class HouseController extends Controller
{
    public function index()
   {   
       if (request()->query('search')) {
          dd(request()->query('search'));
       }
       $user=Auth::user();
       return view('users.posts.house.index')->with('houses',House::all())->with('user',$user);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('posts.house.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $this->validate($request,[
           'type'=>'required',
           'price'=>'required',
           'bath_room'=>'required',
           'bed_room'=>'required',
           'living_room'=>'required',
           'med_room'=>'required',
           'kitchen'=>'required',
           'meter_square'=>'required',
           'price_type'=>'required',
           'description'=>'required',
           'photo'=>'required|image',
           'address'=>'required',
           'phone'=>'required',
       ]);
    $house=new House;
    $house->user_id=auth()->user()->id;
    $house->bath_room=$request->bath_room;
    $house->bed_room=$request->bed_room;
    $house->living_room=$request->living_room;
    $house->price=$request->price;
    $house->price_type=$request->price_type;
    $house->med_room=$request->med_room;
    $house->kitchen=$request->kitchen;
    $house->meter_square=$request->meter_square;
    $house->description=$request->description;
    $house->address=$request->address;
    $house->phone=$request->phone;
    $house->type=$request->type;
    $photo=$request->photo;
    $photo_new_name=time().$photo->getClientOriginalName(); 
    $photo->move('images',$photo_new_name);
    $house->photo='images/'.$photo_new_name;
    if (auth()->user()->is_admin==1) {
       $house->is_approved=1;
    }
    $house->save();
    return redirect()->route('payment_info');


   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $house=House::findOrFail($id);
       $viewed=Session::get('viewed_post', []);
       if (!in_array($house->id,$viewed)) {
           $house->increment('count_view');
           Session::push('viewed_post',$house->id);
       }
       return view('posts.house.show')->with('house',$house);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $house=House::findOrFail($id);
       return view('posts.house.edit')->with('house',$house);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       $this->validate($request,[
        'type'=>'required',
        'price'=>'required',
        'bath_room'=>'required',
        'bed_room'=>'required',
        'living_room'=>'required',
        'med_room'=>'required',
        'kitchen'=>'required',
        'meter_square'=>'required',
        'price_type'=>'required',
        'description'=>'required',
        'photo'=>'required|image',
        'address'=>'required',
        'phone'=>'required',
       ]);
    $house=House::findOrFail($id);
    $house->user_id=auth()->user()->id;
    $house->bath_room=$request->bath_room;
    $house->bed_room=$request->bed_room;
    $house->living_room=$request->living_room;
    $house->price=$request->price;
    $house->price_type=$request->price_type;
    $house->med_room=$request->med_room;
    $house->kitchen=$request->kitchen;
    $house->meter_square=$request->meter_square;
    $house->address=$request->address;
    $house->description=$request->description;
    $house->phone=$request->phone;
    $house->type=$request->type;
    $photo=$request->photo;
    $photo_new_name=time().$photo->getClientOriginalName(); 
    $photo->move('images',$photo_new_name);
    $house->photo='images/'.$photo_new_name;

    if (auth()->user()->is_admin==1) {
        $house->is_approved=1;
     }

    $house->save();
    return redirect()->back();
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       House::findOrFail($id)->delete($id);
       return redirect()->route('user.dashboard');
   }

   public function pending(){
    $houses=House::where('is_approved','=',0)->get();
    $user=Auth::user();
    return view('users.posts.house.pending')->with('houses',$houses)->with('user',$user);
  }
  public function houses(){
   $popular=House::where('is_approved','=',1)->orderBy('count_view','desc')->take(5)->get();
   $search=request()->query('search'); 
    if ($search) {
        $houses=House::where('is_approved','=',1)->where('price','LIKE',"%{$search}%")->paginate(6);
    } else {
        $houses=House::where('is_approved','=',1)->orderBy('created_at','desc')->paginate(12);
    }
   return view('posts.house.index')->with('houses',$houses)->with('popular',$popular);
  }

}
