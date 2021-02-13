@extends('layouts.admin')

@section('content')
@include('include.errors')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h5 class="text-center" style="padding:20Px" >Post Your House</h5>
            <form action="{{ route('house.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row" style="padding-left:30px">
                    <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>
                    <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="price_type">Price Type</label>
                        <select id="price_type" name="price_type" class="form-control">
                            <option selected>Negotiable</option>
                            <option>Fixed</option>
                        </select>
                    </div>
                </div>
                <div class="form-row" style="padding-left:30px">
                    <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="bath_room">Bath Room</label>
                        <input type="text" name="bath_room" class="form-control" id="bath_room">
                    </div>
                    <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="bed_room">Bed Room</label>
                            <input type="text" name="bed_room" class="form-control" id="bed_room">
                    </div>
                </div>
                <div class="form-row" style="padding-left:30px">
                    <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="living_room">Living Room</label>
                        <input type="text" name="living_room" class="form-control" id="living_room">
                    </div>
                    <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="med_room">Med Room</label>
                        <input type="text" name="med_room" class="form-control" id="med_room">
                    </div>
                </div>
                <div class="form-row" style="padding-left:30px">
                    <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="kitchen">Kitchen</label>
                        <input type="text" name="kitchen" class="form-control" id="kitchen">
                    </div>
                    <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="meter_square">Square Meter</label>
                        <input type="text" name="meter_square" class="form-control" id="meter_square">
                    </div>
                </div>
                <div class="form-row" style="padding-left:30px">
                    <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                    </div>
                    <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="type">Type</label>
                        <select id="type" name="type" class="form-control">
                            <option selected>Sell</option>
                            <option>Rent</option>
                        </select>
                    </div>
                </div>
                <div class="form-row" style="padding-left:30px">
                    <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address">
                    </div>
                    <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6" style="padding-right:30px">
                        <label for="description">Description</label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control">You'r description here</textarea>
                    </div>
                <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-4" style="padding-top:30px">
                <div class="container-fluid pb-4">
                    <section id="timeline" class="section">
                            <div class="container">
                            <header class="section-header">
                                <h5>Complete the steps below</h5>
                                <hr>
                            <ol class="timeline timeline-horizontal">
                                <li class="timeline-item">
                                <h6><strong>Step 1</strong></h6>
                                <p>Take good quality picture.</p>
                                </li>
                    
                                <li class="timeline-item">
                                <h6><strong>Step 2</strong></h6>
                                <p>Make payment. 400 Birr for one month.</p>
                                <p>Acc No, 1000200060052(COMERCIAL BANK OF ETHIOPIA)</p>
                                <p>Acc No, 1180416385974013(UNITED BANK)</p>
                                </li>
                    
                                <li class="timeline-item">
                                <h6><strong>Step 3</strong></h6>
                                <p>Send us the photo of the transaction paper on telegram (0911826340). Boom your advert is live.</p>
                                </li>
                            </ol>
                    
                    
                        </div>
                    </section>
                </div>
        </div>
    </div>
</div>
@endsection
