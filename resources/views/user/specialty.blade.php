<div class="page-section">
     <div class="container">
       <h1 class="text-center mb-5 wow fadeInUp">Our Specialist</h1>
        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach($specialties as $specialty)
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="/doctor/{{$specialty->slug}}">
                                <span class="absolute inset-0"></span>
                            {{$specialty->name}}
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{$specialty->body}}</p>
                    </div>
                </article>

            <!-- More posts... -->
            </div>
            @endforeach
        </div>
     </div>
</div> 