@extends('layout.app')
@section('title',"Portfolio")

@section('content')

<div class="container-fluid bg-dark p-5 mt-2">
    <div class="row">
        <div class="col-md-12 text-center text-white">
            <h3>My Portfolio</h3>
        </div>
    </div>
</div>


<div class="container">
    <div class="row" style="margin-top:50px; margin-bottom:50px">
            <div class="col-md-3 p-2">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src={{asset('images/projectImage/doctorsPortal.jpg')}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src={{asset('images/projectImage/emaJohn.jpg')}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            </div>
            <div class="col-md-3 p-2">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src={{asset('images/projectImage/hotGadgets.jpg')}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src={{asset('images/projectImage/pandaCommerce.jpg')}} alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection

