@extends('layouts.admin')

@section('content')
<div class="container-fluid" style="padding-top:20px">
    <table class="table table-responsive-lg table-secondary" style="padding-top:30px">
        <thead>
            <th style="padding-left:30px">No</th>
            <th style="padding-left:30px">Bed Room</th>
            <th style="padding-left:30px">Bath Room</th>
            <th style="padding-left:30px">Kitchen</th>
            <th style="padding-left:30px">Square Meter</th>
            <th style="padding-left:30px">Price</th>
            <th style="padding-left:30px">Price Type</th>
            <th style="padding-left:30px">Show</th>
            <th style="padding-left:30px">Edit</th>
            <th style="padding-left:30px">Approve</th>
            <th style="padding-left:30px">Delete</th>
        </thead>
        <tbody>
            @foreach ($houses as $house)
                <tr>
                    <th style="padding-left:30px">{{ $house->id }}</th>
                    <td style="padding-left:30px">{{ $house->bed_room }}</td>
                    <td style="padding-left:30px">{{ $house->bath_room }}</td>
                    <td style="padding-left:30px">{{ $house->kitchen }}</td>
                    <td style="padding-left:30px">{{ $house->meter_square }}</td>
                    <td style="padding-left:30px">{{ $house->price }}</td>
                    <td style="padding-left:30px">{{ $house->price_type }}</td>
                    <td style="padding-left:30px"><a href="{{ route('admin.house.show',['id'=>$house->id]) }}" class="btn btn-secondary">Show</a></td>
                    <td>
                        <a href="{{ route('admin.house.edit',['id'=>$house->id]) }}" class="btn  btn-primary">
                            Edit
                        </a>
                    </td>

                    <td style="padding-left:30px">
                        @if ($house->is_approved==0)
                            <a href="{{ route('admin.house.approve',['id'=>$house->id]) }}" class="btn btn-info">Approve</a>
                        @else
                           <a href="#" class="btn btn-success">Approved</a>
                        @endif
                    </td>
                    <td style="padding-left:30px">
                        @if ($house->is_approved==0)
                        <a href="{{ route('admin.house.destroy',['id'=>$house->id]) }}" class="btn btn-danger">Decline</a>
                        @else
                           <a href="{{ route('admin.house.destroy',['id'=>$house->id]) }}" class="btn btn-danger">Delete</a>
                        @endif
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection