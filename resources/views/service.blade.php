@extends('layout.app')
@section('title',"Service")

@section('content')

<div class="container-fluid bg-dark p-5 mt-2">
    <div class="row">
        <div class="col-md-12 text-center text-white">
            <h3>My Services</h3>
        </div>
    </div>
</div>


<div class="container">
    <div class="row" style="margin-top:50px; margin-bottom:50px">
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src={{asset('images/projectImage/doctorsPortal.jpg')}} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Service Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src={{asset('images/projectImage/emaJohn.jpg')}} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Service Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src={{asset('images/projectImage/hotGadgets.jpg')}} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Service Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row " style="margin-top:50px; margin-bottom:50px">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Mobile Number">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Your Message</label>
                    <textarea type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Message"></textarea>
                </div>


                <button type="submit" class="btn btn-block btn-primary">Send Now</button>
              </form>
        </div>
        <div class="col-md-6">
            <h5>Address</h5>
            <address>
                <p>Ashulia-1341, Savar, Dhaka</p>
                <p>Bangladesh</p>
                <p>+8801627098985</p>
                <p>shakilatrai5@gmail.com</p>
            </address>
        </div>
    </div>
</div>
@endsection
