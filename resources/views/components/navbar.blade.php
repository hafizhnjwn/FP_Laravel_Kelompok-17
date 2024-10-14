<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">

        <div class="container">
            <a class="navbar-brand" href=""><span class="text-primary">TCare Hospital</a>



            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- <div class="collapse navbar-collapse" id="navbarSupport"> --}}

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ auth()->check() ? url('/home') : url('/') }}">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="doctor">Our Doctors</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="facilities">Our Facilities</a>
                </li>

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('myappointment') }}">My Appointment</a>
                        </li>
                        <x-app-layout></x-app-layout>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                @endif
            </ul>

            <style>
                .nav-link:hover {
                    text-decoration: underline;
                }
            </style>

            {{-- </div> <!-- .navbar-collapse --> --}}
        </div> <!-- .container -->
    </nav>
</header>
