<x-layout>
    <div class="page-hero bg-image overlay-dark" style="background-image: url(/facility-icons/{{$facility->icon}})">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <h1 class="display-4">{{ $facility->name }}</h1>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p>{{ $facility->description }}</p>
        <a href="{{ url('/facilities') }}" class="btn btn-primary mt-4">&laquo; Back to Facilities</a>
    </div>
</x-layout>
