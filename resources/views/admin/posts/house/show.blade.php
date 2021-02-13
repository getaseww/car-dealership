@extends('layouts.admin')

@section('content')
<div class="container-fluid" style="padding-left:40px;padding-top:20px;padding-bottom:20px">
    <h4>{{ $house->meter_square }} house  around {{ $house->address }}</h4>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <img src="{{ asset($house->photo) }}" alt="img" height="500px" width="790px">
                <strong ><h5 class="text-center" style="font-weight:bold;padding-top:30px">Car Information</h5></strong>
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
                            <p>{{ $house->bath_room }}</p>
                        </div>
                    </div>
                    <div style="padding-top:30px;padding-left:30px">
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Bed Room:</h5>
                            <p>{{ $house->bed_room }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Kitchen:</h5>
                            <p>{{ $house->kitchen }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Address: </h5>
                            <p>{{ $house->address }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Med Room: </h5>
                            <p>{{ $house->med_room }}</p>
                        </div>
                    </div>
                    <div style="padding-top:30px;padding-left:30px">
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Living Room: </h5>
                            <p>{{ $house->living_room }}</p>
                        </div>        
                    </div>
                </div>
                <div>
                    <h5 class="text-center">
                        More Description
                    </h5>
                    <p>{{ $house->description }}</p>
                </div>
                
            </div>
        </div>
        <div class="col-4">

        </div>
    </div>
</div>

@endsection