@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <div id="particles-js"style="height:100px;">
                  
        </div>
      
                    <script
                    src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
                    <script>
                      particlesJS.load('particles-js', 
                      'js/particles.json', function(){
                        console.log('particles.json loaded...');
                        });
                    </script>
       <h1 style="text-shadow:4px 8px 8px black;"><mark style="color:red;background:transparent;">About</mark> <mark style="color:red;background:transparent;">T</mark><mark style="color:white;background:transparent;">N</mark><mark style="color:blue;background:transparent;">T</mark> <mark style="color:white;background:transparent;">American</mark><br><mark style="color:blue;background:transparent;">Buildings</mark></h1>
       <p style="font-size:25px;">We Are A Texas-Proud Company Focused On Providing And Building Quality Metal Buildings!</p>
       <h3>We Specialize In The Custom Construction Of The Following:</h3>
       <ol class="list-group"style="border:2px solid black;box-shadow:4px 8px 8px black;">
           <li class="list-group-item"style="color:white;background-color:red;">Carports</li>
           <li class="list-group-item"style="color:black;background-color:white;">Regular Frame Carports</li>
           <li class="list-group-item"style="color:white;background-color:blue;">A-Frame Carports</li>
           <li class="list-group-item"style="color:white;background-color:red;">Certified Triple Wide Carports</li>
           <li class="list-group-item"style="color:black;background-color:white;"style="color:black;background-color:white;">RV Covers</li>
           <li class="list-group-item"style="color:white;background-color:blue;">Barns</li>
           <li class="list-group-item"style="color:white;background-color:red;">Horse Sheds</li>
           <li class="list-group-item"style="color:black;background-color:white;">Lean-Tos</li>
           <li class="list-group-item"style="color:white;background-color:blue;">Metal Enclosed Buildings</li>

       </ol><br><br>
       <p>We offer the best quality buildings in the industry by using galvanized 12ga and 14ga squared tubing as
            well as 29ga and 26ga sheet metal. We also offer FREE INSTALLATIONS and travel throughout the entire state of Texas for your convenience, delivering the professional service you need!</p>
       <br><br>
       <a style="box-shadow:4px 8px 8px black;" href="/gallery" class="btn btn-primary">Let me see what you got!</a>
</div>
<h6 style="color:rgba(255,255,255,0.2);">"metal buildings"</h6>
@endsection
            

