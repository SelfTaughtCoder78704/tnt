@extends('layouts.app')
@section('content')
<br><br>
<div class="jumbotron">
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="border:2px solid black;box-shadow:4px 8px 8px black;">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide"title="metal buildings" src="/media/MetalB.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>We Provide Quality Metal Buildings.</h1>
                <p>Built on site by professionals.</p>
                <p><a  style="box-shadow:4px 8px 8px black;"class="btn btn-lg btn-primary" href="tel:+1-254-493-5094" role="button">Call Us Today!</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide"title="metal buildings" src="/media/Barn.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Style after style here at TNT American Buildings!</h1>
                <p>Whatever your needs, we got you covered!</p>
                <p><a style="box-shadow:4px 8px 8px black;" class="btn btn-lg btn-primary" href="/about" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" title="metal buildings"src="/media/metalb3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a  style="box-shadow:4px 8px 8px black;"class="btn btn-lg btn-primary" href="#galPics" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><br><br><h1 id="galPics">Gallery</h1>
      <div class="row"style="margin-top:5em;">
          
            <div class="col-lg-4">
              <img class="rounded-circle" src="/media/metalB4.jpg" alt="metal building"title="metal buildings" width="240" height="240">
              <h2>Metal Side by Side With Garage</h2>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="rounded-circle" src="/media/metalB9.jpg" alt="metal building"title="metal buildings" width="240" height="240">
              <h2>Open Storage/Barn</h2>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <img class="rounded-circle" src="/media/metalB7.jpg" title="metal buildings"alt="Generic placeholder image" width="240" height="240">
              <h2>Heading</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                    <img class="rounded-circle" src="/media/metalB8.jpg" alt="metal building" width="240" height="240">
                    <h2>Metal Side by Side With Garage</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-lg-4">
                    <img class="rounded-circle" src="/media/metalB6.jpg" alt="metal building" width="240" height="240">
                    <h2>Open Storage/Barn</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-lg-4">
                    <img class="rounded-circle" src="/media/metalB5.jpg" alt="metal building" width="240" height="240">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-lg-4">
                        <img class="rounded-circle" src="/media/metalB3.jpg" alt="metal building" width="240" height="240">
                        <h2>Metal Side by Side With Garage</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                      </div><!-- /.col-lg-4 -->
                      <div class="col-lg-4">
                        <img class="rounded-circle" src="/media/metalB2.jpg" alt="metal building" width="240" height="240">
                        <h2>Open Storage/Barn</h2>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                      </div><!-- /.col-lg-4 -->
                      <div class="col-lg-4">
                        <img class="rounded-circle" src="/media/metalBuilding1.jpg" alt="metal building" width="240" height="240">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                      </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div>
        <h6 style="color:rgba(255,255,255,0.2);">"metal buildings"</h6>
@endsection
            