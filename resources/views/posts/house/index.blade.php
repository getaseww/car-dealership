@extends('layouts.app')
 
@section('content') 
<div class="container-fluid">
    <div class="row">
        <div class="col-8"> 
                @foreach($houses->chunk(3) as $chunk) 
                    <div class="row pt-2 pr-3 pl-2">
                        @foreach ($chunk as $house)
                            <div class="col-md-4" style="padding-left:30px;padding-top:30px">
                                <a href="{{ route('house.show',['id'=>$house->id]) }}" style="color:black;text-decoration:none">
                                    <div class="card">
                                        <img src="{{asset($house->photo) }}" class="card-img-top img-fluid" alt="" style="width:100%;height:150px;object-fit:cover">          
                                        <div class="row ustify-content-between" style="padding-left:30px;padding-top:5px;padding-right:30px">
                                            <div class="badges">
                                                <p class="badge badge-danger" >Birr {{ $house->price }}({{ $house->price_type }})</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between" style="padding-left:30px;padding-top:5px;padding-right:30px">
                                            <div class="badges">
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
                                        <div class="row justify-content-between" style="backgroun-color:blue;padding-left:30px;padding-top:5px;padding-right:30px;padding-bottom:10px">
                                            <i class="fa fa-user" aria-hidden="true">{{ $house->user->name }}</i>  
                                            <i class="fa fa-eye" aria-hidden="true">{{ $house->count_view }}</i>   
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
                <form class="form-inline" action="{{ route('houses') }}" method="GET"> 
                  <input class="form-control mr-sm-2" type="search" name="search"  placeholder="Search by price" aria-label="Search">
                  <button class="btn btn-outline-success  my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                <hr>

                <h6 class="sidebar-title">Popular posts</h6>
                @foreach ($popular as $pop)  
                    <a class="media text-default align-items-center mb-3" href="{{ route('house.show',['id'=>$pop->id]) }}" style="text-decoration:none">
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
<div class="pt-lg-5 pl-lg-5">{{ $houses->links() }}</div>

@endsection
