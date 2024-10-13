<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Specialist</h1>
  
          <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach($specialties as $specialty)
            <a href="/doctor/{{$specialty->slug}}">
            <div class="item">
              <div class="card-doctor">
                <div class="body">
                  <p class="text-xl mb-0">{{ $specialty->name}}</p>
                </div>
              </div>
            </div>
            </a>
           @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>