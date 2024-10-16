<x-layout>
<div class="page-section">
     <div class="container">
       <h1 class="text-center wow fadeInUp" style="font-weight: bold; font-size: 2em;">{{$title}}</h1>

           <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

             @foreach($posts as $doctor)
             <div class="item">
               <div class="card-doctor">
                 <div class="header">
                   <img height="300px" src="{{ asset('doctorimage/' . $doctor->image) }}" alt="Doctor Image">
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
</x-layout>