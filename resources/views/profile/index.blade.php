@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <a href="">Approved Posts</a>
                </div>
            </div>
            <div class="col-8">
                <div class="d-flex align-items-center pl-lg-5 pt-lg-4 justify-content-between">
                <p ><strong class=" pt-lg-5 " >{{ Auth::user()->name}}</strong></p>
                    <a href="" class="pull-right" >complete profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection