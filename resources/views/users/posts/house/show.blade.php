@extends('layouts.app')
@section('content')
<div class="container-fluid" style="padding-left:40px;padding-top:20px;padding-bottom:20px">
    <h4>{{$house->meter_square }}M <sup>2</sup> house around {{ $house->address }}</h4>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <img src="{{ asset($house->photo) }}" alt="img" style="width:100%;object-fit:cover" height="500px" width="790px">
                <strong ><h5 class="text-center" style="font-weight:bold;padding-top:30px">All Information</h5></strong>
                <div class="row">
                    <div style="padding-top:30px;padding-left:30px">
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Square Meter:</h5>
                            <p>{{ $house->meter_square }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Price: </h5>
                            <p>{{ $house->price }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Price Type:</h5>
                            <p>{{ $house->price_type }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Bath Room:</h5>
                            <p class="pl-2">  {{ $house->bath_room }}</p>
                        </div>
                    </div>
                    <div style="padding-top:30px;padding-left:30px">
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Bed Room:</h5>
                            <p class="pl-2">{{ $house->bed_room }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Kitchen:</h5>
                            <p class="pl-2">{{ $house->kitchen }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Address:</h5>
                            <p class="pl-2">{{ $house->address }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Med Room: </h5>
                            <p class="pl-2">{{ $house->med_room }}</p>
                        </div>
                    </div>
                    <div style="padding-top:30px;padding-left:30px">
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Living Room: </h5>
                            <p>{{ $house->living_room }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">House Type: </h5>
                            <p>{{ $house->type }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Contact phone: </h5>
                            <p>{{ $house->phone }}</p>
                        </div>                  
                    </div>
                </div>
                <div>
                    <h5 class="text-center">
                        More Description
                    </h5>
                    <p class="pl-5 pr-5 text-center">{{ $house->description }}</p>
                </div>
                <hr>
                <div class="row justify-content-between" style="padding-left:30px;padding-right:30px">
                    <p><i class="fa fa-user" aria-hidden="true"></i>{{ $house->user->name }}</p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $house->created_at->diffForHumans() }}</p>
                    <p><i class="fa fa-eye" aria-hidden="true"></i> {{ $house->count_view }}</p>
                </div>
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Contact of the adminstrator</h4>
                </div>
                <div class="card-body">
                    <div class="col-md">
                         <i class="fa fa-phone" aria-hidden="true">0965865274</i>
                         <i class="fa fa-phone" aria-hidden="true">0965865274</i>
                         <i class="fa fa-envelope" aria-hidden="true">info@eduna.com</i>
                    </div>
                    <div class="row ">
                        <a href="www.facebook.com" class="pl-4 pr-3"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="t.me/eduna" class="pr-3"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                        <a href="#" class="pr-3"><i class="fab fa-viber    "></i></a>
                        <a href="#" class="pr-3"><i class="fab fa-whatsapp    "></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection