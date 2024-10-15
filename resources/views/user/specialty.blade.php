<div class="page-section">
     <div class="container">
     <h1 class="text-center wow fadeInUp" style="font-weight: bold; font-size: 2em;">Our Specialist</h1>
        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach($specialties as $specialty)
            <article class="p-6 bg-white dark:bg-gray-800 dark:border-gray-700">
              <a href="/doctor/{{$specialty->slug}}" class="hover:underline">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$specialty->name}}</h2>
              </a>
              <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{$specialty->body}}</p>
          </article>       
            @endforeach
        </div>
     </div>
</div> 