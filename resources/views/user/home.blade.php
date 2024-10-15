<x-layout>
    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">HEALTHY BODY</span>
                <h1 class="display-4">HAPPY COLLEGE</h1>

            </div>
        </div>
    </div>


    <div class="bg-light">


        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1 class=" wow fadeInUp" style="font-weight: bold; font-size: 2em;">Welcome to TCare Hospital
                        </h1>
                        <br>
                        <p class="text-grey mb-4">

                            Selamat datang di Pusat Kesehatan Anda, tempat di mana kesehatan dan kesejahteraan menjadi
                            prioritas utama. Kami berkomitmen untuk memberikan pelayanan kesehatan berkualitas tinggi
                            dan perawatan yang peduli kepada semua pasien kami.
                            <br>
                            Dengan tim profesional dan fasilitas medis yang modern, kami berupaya memastikan bahwa
                            setiap kunjungan Anda dijamin kenyamanan dan keamanannya. Kami memahami betapa pentingnya
                            perawatan kesehatan yang holistik, dan kami siap memberikan solusi yang sesuai dengan
                            kebutuhan Anda.
                        </p>

                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="../assets/img/bg-doctor.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    @include('user.specialty')

    @include('user.facilityhome')

    @include('user.appointment')


</x-layout>
