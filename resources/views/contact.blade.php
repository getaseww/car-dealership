@extends('layouts.app')
<style>
div.col-8{
    padding-top: 50px
}
</style>
@section('content')
<div class="row">
    <div class="col-4"></div>
    <div class="col-md-4">
        <form action="{{ route('contact.store') }}" method="post">
            @csrf
            <div class="form" style="padding:30px">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="44" rows="5">Your Message here....</textarea>
                </div>
            </div>
            <div class="text-center">
                    <button type="submit" class="btn btn-primary">Send Message </button>
            </div>
        </form>
    </div>
    <div class="col-4"></div>
</div>
@endsection