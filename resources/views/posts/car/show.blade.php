@extends('layouts.app')
@section('content')
<div class="container-fluid" style="padding-left:40px;padding-top:20px;padding-bottom:20px">
    <h5>{{ $car->model }},{{ $car->make }}</h5>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <img src="{{ asset($car->photo) }}" class="img-fluid" style="width:100%;object-fit:cover" alt="img" height="500px" width="790px">
                <strong ><h5 class="text-center" style="font-weight:bold;padding-top:30px">All Information</h5></strong>
                <div class="row">
                    <div style="padding-top:30px;padding-left:30px">
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Model:</h5>
                            <p>{{ $car->model }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Make: </h5>
                            <p>{{ $car->make }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Price: </h5>
                            <p>ETB {{ $car->price }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Price Type:</h5>
                            <p>{{ $car->price_type }}</p>
                        </div>
                    </div>
                    <div style="padding-top:30px;padding-left:30px">
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Year:</h5>
                            <p>{{ $car->year }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Condition:</h5>
                            <p>{{ $car->condition }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Engine Size: </h5>
                            <p>{{ $car->engine_size }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Engine Type: </h5>
                            <p>{{ $car->engine_type }}</p>
                        </div>
                    </div>
                    <div style="padding-top:30px;padding-left:30px">
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Color: </h5>
                            <p>{{ $car->color }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Transmission:</h5>
                            <p>{{ $car->transmission }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Mileage:</h5>
                            <p>{{ $car->mileage }}</p>
                        </div>
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Transmission:</h5>
                            <p>{{ $car->transmission }}</p>
                        </div>
                    </div>
                    <div style="padding-top:5px;padding-left:30px">
                        <div class="row" style="padding-left:30px">
                            <h5 style="font-weight:bold">Contact Phone: </h5>
                            <p>{{ $car->phone }}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h5 class="text-center">
                        More Description
                    </h5>
                    <p class="pl-5 pr-5 text-center">{{ $car->description }}</p>
                </div>
                <hr>
                <div class="row justify-content-between" style="padding-left:30px;padding-right:30px">
                    <p><i class="fa fa-user" aria-hidden="true"></i>{{ $car->user->name }}</p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $car->created_at->diffForHumans() }}</p>
                    <p><i class="fa fa-eye" aria-hidden="true"></i> {{ $car->count_view }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection