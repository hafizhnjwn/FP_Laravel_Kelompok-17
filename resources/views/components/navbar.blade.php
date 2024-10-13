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
                    <a class="nav-link hover:underline"  href="home">Home</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link hover:underline" href="doctor">Our Doctors</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link hover:underline" href="facility">Our Facilities</a>
                </li>


                <li>

                    @if (Route::has('login'))
                        @auth

                    <li class="nav-item active">
                        <a class="nav-link hover:underline" href="{{ 'myappointment' }}">My Appointment</a>
                    </li>

                    <x-app-layout>
                    </x-app-layout>
                @else
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
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