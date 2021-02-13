@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-4"></div>
    <div class="col-md-4">
        @foreach ($messages as $message)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">From {{ $message->name }}</h5>
                <p class="card-text pt-1">{{ $message->message }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-4"></div>
</div>
@endsection