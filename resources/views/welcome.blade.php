@extends('layouts.app')
 
@section('content') 
<div class="container-fluid"> 
    @foreach($cars->chunk(3) as $chunk) 
        <div class="row pt-2 pr-3 pl-2">
            @foreach ($chunk as $car)
                <div class="col-md-4" style="padding-left:30px;padding-top:30px">
                    <a href="{{ route('car.show',['id'=>$car->id]) }}" style="color:black;text-decoration:none">
                        <div class="card">
                            <img src="{{ $car->photo }}" class="card-img-top img-fluid" alt="" style="width:100%;height:250px;object-fit:cover">
                            <div class="row justify-content-between" style="padding-left:30px;padding-top:5px;padding-right:30px">
                                <div class="badges">
                                  <p class="badge badge-danger" >Birr {{ $car->price }}({{ $car->price_type }})</p>
                                  <p class="badge badge-primary" >{{ $car->transmission }}</p>
                                </div>
                            </div> 
                            <div class="row justify-content-between" style="padding-left:30px;padding-top:5px;padding-right:30px">
                                <div class="badges justify-content-between">
                                  <p class="badge badge-warning" >{{ $car->engine_type }}</p>
                                  <p class="badge badge-info" ><i class="fa fa-phone" aria-hidden="true"></i>  {{ $car->phone }} </p>
                                </div>
                            </div> 
                            <hr>
                            <div class="row justify-content-between" style="backgroun-color:blue;padding-left:30px;padding-top:5px;padding-right:30px;padding-bottom:10px">
                                <i class="fa fa-user" aria-hidden="true">{{ $car->user->name }}</i>  
                                <i class="fa fa-clock-o" aria-hidden="true">{{ $car->created_at->diffForHumans() }}</i> 
                                <i class="fa fa-eye" aria-hidden="true">{{ $car->count_view }}</i>   
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach  
    <div class="container-fluid pt-3 pb-4 pl-4">
        <a href="{{ route('cars') }}" class="btn btn-primary" role="button">View All Cars</a>
    </div>
</div> 
<div class="container-fluid pt-2"> 
    @foreach($houses->chunk(3) as $chunk) 
        <div class="row pr-3 pl-2">
            @foreach ($chunk as $house)
                <div class="col-md-4" style="padding-left:30px;padding-top:30px">
                    <a href="{{ route('house.show',['id'=>$house->id]) }}" style="color:black;text-decoration:none">
                        <div class="card">
                          <img src="{{ $house->photo }}" class="card-img-top img-fluid" alt="" style="width:100%;height:250px;object-fit:cover">
                          <div class="row justify-content-between" style="padding-left:30px;padding-top:5px;padding-right:30px">
                              <div class="badges">
                                <p class="badge badge-danger" >Birr {{ $house->price }}({{ $house->price_type }})</p>
                                <p class="badge badge-primary" >{{ $house->meter_square }} M<sup>2</sup></p>
                                <p class="badge badge-secondary" >For {{ $house->type }}</p>
                              </div>
                          </div> 
                          <div class="row justify-content-between" style="padding-left:30px;padding-top:5px;padding-right:30px">
                              <div class="badges justify-content-between">
                                <p class="badge badge-warning" ><i class="fa fa-location-arrow" aria-hidden="true"></i>  {{ $house->address }}</p>
                                <p class="badge badge-info" ><i class="fa fa-phone" aria-hidden="true"></i>  {{ $house->phone }} </p>
                              </div>
                          </div>
                          
                          <hr>
                          <div class="row justify-content-between" style="backgroun-color:blue;padding-left:30px;padding-right:30px;padding-bottom:10px">
                              <i class="fa fa-user" aria-hidden="true">{{ $house->user->name }}</i>  
                              <i class="fa fa-clock-o" aria-hidden="true">{{ $house->created_at->diffForHumans() }}</i> 
                              <i class="fa fa-eye" aria-hidden="true">{{ $house->count_view }}</i>   
                          </div>
                        </div>
                    </a> 
                </div>
            @endforeach
        </div>
    @endforeach 
    <div class="container-fluid pt-3 pb-4 pl-4" >
        <a href="{{ route('houses') }}" class="btn btn-primary text-center" role="button">View All Houses</a>
    </div>
</div>
<section class="section bg-gray pt-4">
    <div class="container">
        <header class="section-header">
          <h4 class="text-center">HOW TO SELL YOUR PROPERTY FAST</h4>
          <hr>
        </header>


        <div data-provide="slider" data-dots="true" data-autoplay="false" data-slides-to-show="2">
          <div class="p-2">
            <div class="card border hover-shadow-6">
              <div class="card-body px-5">
                <div class="row">
                  <div class="col-auto mr-auto">
                    <h6><strong>TAKE GREATE PHOTOS</strong></h6>
                  </div>
                </div>
                <p>Taking good quality photo can have a huge impact on the time it takes to sell your property.</p>
              </div>
            </div>
          </div>
          <div class="p-2">
            <div class="card border hover-shadow-6">
              <div class="card-body px-5">
                <div class="row">
                  <div class="col-auto mr-auto">
                    <h6><strong>KEEP IT SNAPPY</strong></h6>
                  </div>
                </div>
                <p>Keep your property description short and simple.Call out optional extras that other similar properties may not have.</p>
              </div>
            </div>
          </div>
          <div class="p-2">
            <div class="card border hover-shadow-6">
              <div class="card-body px-5">
                <div class="row">
                  <div class="col-auto mr-auto">
                    <h6><strong>BE HONEST</strong></h6>
                  </div>
                </div>
                <p>It is important that your property description is accurate. It will save time with needless viewings if buyers are aware of any faults from the get-go. </p>
              </div>
            </div>
          </div>


        </div>              
    </div>
</section>
</div>
@endsection
