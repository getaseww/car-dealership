@extends('layouts.admin')

@section('content')
<div class="container-fluid" style="padding-top:20px">
    <table class="table table-responsive-lg table-secondary" style="padding-top:30px">
        <thead>
            <th style="padding-left:30px">No</th>
            <th style="padding-left:30px">Name</th>
            <th style="padding-left:30px">Email</th>
            <th style="padding-left:30px">Phone</th>
            <th style="padding-left:30px">Delete</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th style="padding-left:30px">{{ $user->id }}</th>
                    <td style="padding-left:30px">{{ $user->name }}</td>
                    <td style="padding-left:30px">{{ $user->email }}</td>
                    <td style="padding-left:30px">{{ $user->phone }}</td>
                    <td style="padding-left:30px"><a href="{{ route('admin.user.destroy',['id'=>$user->id]) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection