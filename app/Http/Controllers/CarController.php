<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Auth;
use Session;
class CarController extends Controller
{     

   public function index()
   {  
       $user=Auth::user();
       return view('users.posts.car.index')->with('cars',Car::all())->with('user',$user);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('posts.car.create');
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
           'model'=>'required',
           'mileage'=>'required',
           'make'=>'required',
           'price'=>'required',
           'price_type'=>'required',
           'condition'=>'required',
           'year'=>'required',
           'engine_size'=>'required',
           'transmission'=>'required',
           'color'=>'required',
           'engine_type'=>'required',
           'description'=>'required',
           'photo'=>'required|image',
           'phone'=>'required',
       ]);
    $car=new Car;
    $car->user_id=auth()->user()->id;
    $car->model=$request->model;
    $car->mileage=$request->mileage;
    $car->make=$request->make;
    $car->price=$request->price;
    $car->price_type=$request->price_type;
    $car->condition=$request->condition;
    $car->year=$request->year;
    $car->engine_size=$request->engine_size;
    $car->transmission=$request->transmission;
    $car->color=$request->color;
    $car->engine_type=$request->engine_type;
    $car->description=$request->description;
    $car->phone=$request->phone;
    $photo=$request->photo;
    $photo_new_name=time().$photo->getClientOriginalName(); 
    $photo->move('images',$photo_new_name);
    $car->photo='images/'.$photo_new_name;
    
    if (auth()->user()->is_admin==1) {
        $car->is_approved=1;
     }

    $car->save();
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
       $car=Car::findOrFail($id);
       $viewed=Session::get('viewed_post', []);
       if (!in_array($car->id,$viewed)) {
           $car->increment('count_view');
           Session::push('viewed_post',$car->id);
       }
       return view('posts.car.show')->with('car',$car);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $car=Car::findOrFail($id);
       return view('posts.car.edit')->with('car',$car);
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
           'model'=>'required',
           'mileage'=>'required',
           'make'=>'required',
           'price'=>'required',
           'price_type'=>'required',
           'condition'=>'required',
           'year'=>'required',
           'engine_size'=>'required',
           'transmission'=>'required',
           'color'=>'required',
           'engine_type'=>'required',
           'description'=>'required',
           'photo'=>'required|image',
           'phone'=>'required',
       ]);
    $car=Car::findOrFail($id);
    $car->user_id=auth()->user()->id;
    $car->model=$request->model;
    $car->mileage=$request->mileage;
    $car->make=$request->make;
    $car->price=$request->price;
    $car->price_type=$request->price_type;
    $car->condition=$request->condition;
    $car->year=$request->year;
    $car->engine_size=$request->engine_size;
    $car->transmission=$request->transmission;
    $car->color=$request->color;
    $car->engine_type=$request->engine_type;
    $car->description=$request->description;
    $car->phone=$request->phone;
    $photo=$request->photo;
    $photo_new_name=time().$photo->getClientOriginalName(); 
    $photo->move('images',$photo_new_name);
    $car->photo='images/'.$photo_new_name;
    $car->phone=$request->phone;

    if (auth()->user()->is_admin==1) {
        $car->is_approved=1;
     }

    $car->save();
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
       Car::findOrFail($id)->delete($id);
       return redirect()->route('my-cars');
   }

   
   public function pending(){
        $cars=Car::where('is_approved','=',0)->get();
        $user=Auth::user();
        return view('users.posts.car.pending')->with('cars',$cars)->with('user',$user);
   }
   public function cars(){
    $popular=Car::where('is_approved','=',1)->orderBy('count_view','desc')->take(5)->get();

    $search=request()->query('search'); 
    if ($search) {
        $cars=Car::where('is_approved','=',1)->where('model','LIKE',"%{$search}%")->paginate(6);
    } else {
        $cars=Car::where('is_approved','=',1)->orderBy('created_at','desc')->paginate(12);
    }
    return view('posts.car.index')->with('cars',$cars)->with('popular',$popular);
   }
}
