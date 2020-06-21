@extends('layout.app')
@section('title',"Home")


@section('content')

<div class="container-fluid m-0 parallax mb-5">
    <div class="row m-0 d-flex justify-content-center">
        <div class="col-md-4 text-center" style="margin-top:120px">
            <h1 class="text-white">Software Enginner</h1>
            <h4 class="text-white">Mobile and Web</h4>
            <button class="btn btn-success">Learn More</button>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <h2 class="text-center">My Services</h2><br>
    <div class="row">
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



<div class="container mt-5 mb-5">
    <h2 class="text-center">Recent Projects</h2><br>
    <div class="row">
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src={{asset('images/projectImage/doctorsPortal.jpg')}} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Project Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button class="btn btn-success">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src={{asset('images/projectImage/emaJohn.jpg')}} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Project Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button class="btn btn-success">Learn More</button>
                </div>
            </div>

        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src={{asset('images/projectImage/hotGadgets.jpg')}} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Project Name</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <button class="btn btn-success">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <h2 class="text-center">Contact With Me</h2>
    <br>
    <div class="row">
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

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.0510437163925!2d90.27204861257684!3d23.92324652332764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e844069998a5%3A0xfb52484b6cd387cf!2sArmy%20Firing%20Range!5e0!3m2!1sen!2sbd!4v1592718384000!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>
    </div>
</div>



@endsection
