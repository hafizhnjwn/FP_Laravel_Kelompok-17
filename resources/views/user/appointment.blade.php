@if (Route::has('login'))
    @auth
        <div class="page-section">
            <div class="container">
              <h1 class="text-center wow fadeInUp" style="font-weight: bold; font-size: 2em;">Make an Appointment</h1>

                <form class="main-form" action="{{ url('appointment') }}" method="POST">
                    @csrf
                    <div class="row mt-5">
                        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                            <input type="text" name="name" class="form-control" placeholder="Full name">
                        </div>
                        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                            <input type="text" name="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                            <input type="date" name="date" class="form-control">
                        </div>

                        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                            <select name="doctor" id="departement" class="custom-select">
                                <option value="" disabled selected>Select doctor</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->name }}">{{ $doctor->name }} |
                                        {{ $doctor->specialty->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                            <input type="text" name="number" class="form-control" placeholder="Number..">
                        </div>
                        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                        </div>
                    </div>
                    <button type="submit" class="zoomIn wow fadeInUp"
                        style="
                          background-color: #63d2a1; 
                          color: #333; 
                          border: none; 
                          padding: 10px 20px; 
                          border-radius: 5px; 
                          font-size: 16px; 
                          cursor: pointer; 
                          transition: background-color 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#555'; this.style.color='#333';"
                        onmouseout="this.style.backgroundColor='#63d2a1'; this.style.color='#333';">
                        Submit Request
                    </button>
                </form>

                <!-- Modal Popup -->
                <div id="messageModal"
                    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
                    <div
                        style="background-color: white; padding: 20px; border-radius: 5px; width: 300px; text-align: center;">
                        <p id="modalMessage" style="font-size: 16px;"></p>
                        <button onclick="closeModal()"
                            style="margin-top: 10px; background-color: #63d2a1; border: none; padding: 5px 10px; border-radius: 5px; color: white; cursor: pointer;">OK</button>
                    </div>
                </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('.main-form').on('submit', function(e) {
                            e.preventDefault(); // Mencegah halaman refresh

                            // Bersihkan pesan kesalahan sebelumnya
                            $('.error-message').remove();

                            $.ajax({
                                url: "{{ url('appointment') }}",
                                method: "POST",
                                data: $(this).serialize(),
                                success: function(response) {
                                    // Tampilkan pesan sukses di modal
                                    $('#modalMessage').html('<span style="color: green;">' + response
                                        .message + '</span>');
                                    $('#messageModal').css('display', 'flex'); // Tampilkan modal

                                    // Reset form setelah berhasil submit
                                    $('.main-form')[0].reset();
                                },
                                error: function(xhr) {
                                    if (xhr.status === 422) { // Jika ada error validasi
                                        var errors = xhr.responseJSON.errors;
                                        $.each(errors, function(key, value) {
                                            $('input[name=' + key + '], textarea[name=' + key +
                                                '], select[name=' + key + ']').after(
                                                '<p class="error-message" style="color: red;">' +
                                                value[0] + '</p>');
                                        });
                                    }
                                }
                            });
                        });
                    });

                    function closeModal() {
                        $('#messageModal').css('display', 'none'); // Sembunyikan modal
                    }
                </script>
            </div>
        </div> <!-- .page-section -->
    @endauth
@endif
