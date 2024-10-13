<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>



    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    
          <div class="container">
            <a class="navbar-brand" href="/"><span class="text-primary">TCare Hospital</a>
              
            
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            {{-- <div class="collapse navbar-collapse" id="navbarSupport"> --}}
              <ul class="navbar-nav ml-auto">
                
                <li class="nav-item active">
                  <a class="nav-link" href="home">Home</a>
                </li>
               
               
                <li>
    
                @if(Route::has('login'))
    
                @auth
    
                <li class="nav-item">
                  <a class="nav-link" style="background-color: greenyellow; color: whiteh" href="{{ 'myappointment' }}">My Appointment</a>
                </li>
    
                <x-app-layout>
                </x-app-layout>
    
                @else
    
                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                </li>
    
                <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                  </li>
    
                 
                  @endauth
    
                  @endif
    
                  
               </li>
               
              </ul>
            {{-- </div> <!-- .navbar-collapse --> --}}
          </div> <!-- .container -->
        </nav>
      </header>

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-weight: bold; font-size: 2em;">{{$title}}</h1>
  
          <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach($posts as $doctor)
            <div class="item">
              <div class="card-doctor">
                <div class="header">
                  <img height="300px" src="doctorimage/{{$doctor->image}}" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">{{ $doctor->name}}</p>
                  <span class="text-sm text-grey">{{ $doctor->speciality}}</span>
                </div>
              </div>
            </div>
           @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>