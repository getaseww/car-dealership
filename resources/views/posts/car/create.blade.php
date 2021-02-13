@extends('layouts.admin')

@section('content')
@include('include.errors')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
                <h5 class="text-center" style="padding:20Px" >Post Your Car</h5>
                <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row" style="padding-left:30px">
                        <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="model">Model</label>
                            <input type="text" name="model" class="form-control" id="model">
                        </div>
                        <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="make">Car Make</label>
                            <select id="make" name="make" class="form-control">
                                <option selected>Abay</option><option >Alfa Romeo</option>
                                <option>Audi</option><option>Austin</option>
                                <option value="">BAC</option><option >Bentley</option>
                                <option>BMW</option><option value="">Bugatti</option>
                                <option>Cadillac</option><option>Chevrolet</option>
                                <option value="">Cupra</option><option value="">Custom Vehicle</option>
                                <option>Daewoo</option><option>Daihatsu</option>
                                <option value="">Datsun</option><option value="">DAX</option>
                                <option value="">Ferrari</option><option>Fiat</option>
                                <option>Ford</option><option value="">GBS</option>
                                <option>GMC</option><option value="">Hillman</option><option>Honda</option>
                                <option>Hummer</option><option>Hyundai</option>
                                <option value="">Infiniti</option>
                                <option>Isuzu</option><option>Iveco</option>
                                <option>Jaguar</option><option>Jeep</option>
                                <option>Kia</option><option>Lada</option>
                                <option>Lamborghini</option><option> Land Rover</option>
                                <option>Lexus</option><option>Lifan</option>
                                <option>Mazda</option><option>Mercedes Benze</option>
                                <option>Mitsubishi</option><option>Morgan</option>
                                <option value="">Morris</option><option value="">Naylor</option>
                                <option>Nissan</option><option>Opel</option>
                                <option>Other</option><option>Peugeot</option>
                                <option value="">Rover</option><option value="">Suzuki</option>
                                <option value="">Tesla</option><option value="">Tiger</option>
                                <option value="">Toyota</option><option value="">Volkswagon</option>
                                <option value="">Volvo</option><option value="">Zenos</option>
                            </select>
                        </div>
                    </div>
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
                            <label for="year">Year</label>
                            <input type="text" name="year" class="form-control" id="year">
                        </div>
                        <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="engine_size">Engine Size</label>
                            <select id="engine_size" name="engine_size" class="form-control">
                                <option selected>1000</option>
                                <option>1100</option>
                                <option>1300</option>
                                <option>1600</option>
                                <option>1800</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row" style="padding-left:30px">
                        <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="condition">condition</label>
                            <select id="condition" name="condition" class="form-control">
                                <option selected>Used In Ethiopia</option>
                                <option>Not Used In Ethiopia</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="transmission">Transmission</label>
                            <select id="transmission" name="transmission" class="form-control">
                                <option selected>Automatic</option>
                                <option>Manual</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row" style="padding-left:30px">
                        <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="color">Select Color</label>
                            <select id="color" name="color" class="form-control">
                                <option selected>Black</option>
                                <option>Blue</option>
                                <option>Bronze</option>
                                <option>Brown</option>
                                <option >Burgundy</option>
                                <option >Champagne</option>
                                <option >Dark Blue</option>
                                <option >Gold</option>
                                <option >Green</option>
                                <option >Grey</option>
                                <option >Kaki</option>
                                <option >Orange</option>
                                <option >Pencil</option>
                                <option >Purple</option>
                                <option >Red</option>
                                <option >Silver</option>
                                <option >Sky Blue</option>
                                <option >White</option>
                                <option >Yellow</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="engine_type">Engine Type</label>
                            <select id="engine_type" name="engine_type" class="form-control">
                                <option selected>Benzine</option>
                                <option>Diesel</option>
                                <option>Hybrid</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row" style="padding-left:30px">
                        <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="mileage">Mileage</label>
                            <input type="text" name="mileage" class="form-control" id="mileage">
                        </div>
                        <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>
                    <div class="form-row" style="padding-left:30px">
                        <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone">
                        </div>
                        <div class="form-group col-md-6" style="padding-right:30px">
                            <label for="description">Description</label>
                            <textarea name="description" id="" cols="30" rows="5" class="form-control">You'r description here</textarea>
                        </div>
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
                                <h5>Complete this steps</h5>
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