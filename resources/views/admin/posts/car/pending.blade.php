@extends('layouts.admin')

@section('content')
<div class="container-fluid" style="padding-top:20px">
    <table class="table table-responsive-lg table-secondary" style="padding-top:30px">
        <thead>
            <th style="padding-left:30px">No</th>
            <th style="padding-left:30px">Model</th>
            <th style="padding-left:30px">Make</th>
            <th style="padding-left:30px">Price</th>
            <th style="padding-left:30px">Price Type</th>
            <th style="padding-left:30px">year</th>
            <th style="padding-left:30px">Transmission</th>
            <th style="padding-left:30px">Show</th>
            <th style="padding-left:30px">Edit</th>
            <th style="padding-left:30px">Approve</th>
            <th style="padding-left:30px">Delete</th>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <th style="padding-left:30px">{{ $car->id }}</th>
                    <td style="padding-left:30px">{{ $car->model }}</td>
                    <td style="padding-left:30px">{{ $car->make }}</td>
                    <td style="padding-left:30px">{{ $car->price }}</td>
                    <td style="padding-left:30px">{{ $car->price_type }}</td>
                    <td style="padding-left:30px">{{ $car->year }}</td>
                    <td style="padding-left:30px">{{ $car->transmission }}</td>
                    <td style="padding-left:30px">
                        <a href="{{ route('car.show',['id'=>$car->id]) }}" class="btn btn-secondary">Show</a>
                    </td>
                    <td>
                        <a href="{{ route('car.edit',['id'=>$car->id]) }}" class="btn  btn-primary">
                            Edit
                        </a>
                    </td>
                    <td style="padding-left:30px">
                        <a href="{{ route('admin.car.approve',['id'=>$car->id]) }}" class="btn btn-info">Approve</a>
                    </td>
                    <td style="padding-left:30px">
                        <a href="{{ route('car.destroy',['id'=>$car->id]) }}" class="btn btn-danger">Decline</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection