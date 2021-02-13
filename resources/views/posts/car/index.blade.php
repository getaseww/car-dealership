@extends('layouts.app')
 
@section('content') 
<div class="container-fluid">
    <div class="row">
        <div class="col-8"> 
            @foreach($cars->chunk(3) as $chunk) 
                <div class="row pt-2 pr-3 pl-2">
                    @foreach ($chunk as $car)
                        <div class="col-md-4" style="padding-left:30px;padding-top:30px">
                            <a href="{{ route('car.show',['id'=>$car->id]) }}" style="color:black;text-decoration:none">
                                <div class="card">
                                    <img src="{{asset($car->photo) }}" class="card-img-top img-fluid" alt="" style="width:100%;height:150px;object-fit:cover">
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
                                        <i class="fa fa-eye" aria-hidden="true">{{ $car->count_view }}</i>   
                                    </div>
                                </div>   
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach  
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="sidebar px-4 py-md-0">
                <h6 class="sidebar-title">Search</h6>
                <form class="form-inline" action="{{ route('cars') }}" method="GET"> 
                  <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search by model" aria-label="Search">
                  <button class="btn btn-outline-success  my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                <hr>

                <h6 class="sidebar-title">Popular posts</h6>
                @foreach ($popular as $pop)  
                    <a class="media text-default align-items-center mb-3" href="{{ route('car.show',['id'=>$pop->id]) }}" style="text-decoration:none">
                        <img class="rounded w-65px mr-3 img-fluid" src="{{ $pop->photo }}" height="80px" width="80px">
                        <div class="col">
                            <p class="media-body small-2 lh-4 mb-0">{{ $pop->price }}({{ $pop->price_type }})</p>
                            <p class="media-body small-2 lh-4 mb-0">{{ $pop->phone }}</p>
                            <p class="media-body small-2 lh-4 mb-0"><i class="fa fa-eye" aria-hidden="true"></i> {{ $pop->count_view }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="pt-lg-5 pl-lg-5">{{ $cars->links() }}</div>

@endsection
