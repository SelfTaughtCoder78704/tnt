@extends('layouts.app')
@section('content')

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container"><br><br>
          <h2>16855 North I-H 35, Troy, TX 76579</h2>
          <h1 class="jumbotron-heading">Contact Us</h1>
          <p style="font-weight:bold; font-size:25px;"class="lead">Feel Free To Fill Out The Form Below Or Just Give Us A Call At: <br><br><a href="tel:+1-254-493-5094"style="text-shadow:2px 4px 4px black;">(254) 493-5094</a></p>

       <img class="img-fluid" src="media/tntBuilders.png"  width="300" title="TNT American Buildings" alt="TNT American Buildings">
        </div>
      <div id="cont"class="container">
        @if (Session::has('flash_message'))
          <div class="alert alert-success">{{ Session::get('flash_message')}}</div>
        @endif
        <form method="post" action="{{route('contact.store')}}">
          {{ csrf_field()}}
          <div class="form-group">
            <label style="font-weight:bold; font-size:25px;">Full Name: </label>
            <input type="text" class="form-control" name="name">
            @if ($errors->has('name'))
            <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
            @endif
          </div>
          <div class="form-group">
              <label style="font-weight:bold; font-size:25px;" >Email Address: </label>
              <input type="text" class="form-control" name="email">
            @if ($errors->has('email'))
            <small class="form-text invalid-feedback">{{ $errors->first("email") }}</small>
            @endif
          </div>
        
          <div class="form-group">
              <label style="font-weight:bold; font-size:25px;">Message and Phone Number: </label>
              <textarea name="message" class="form-control"></textarea>
            @if ($errors->has('message'))
            <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
            @endif
          </div>
          <button class="btn btn-primary">Submit</button>
        </form>
      </div>
   
    </section>
    </main>
    <h6 style="color:rgba(255,255,255,0.2);">"metal buildings"</h6>
@endsection