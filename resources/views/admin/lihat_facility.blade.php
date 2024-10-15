<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-section">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp">Facility List</h1>

                @if ($facilities->isNotEmpty())
                    <div class="container-fluid page-body-wrapper">
                        <div align="center" style="padding-top:10px;">
                            <table class="table-bordered">
                                <tr align="center">
                                    <th style="padding:10px">Name</th>
                                    <th style="padding:10px">Description</th>
                                    <th style="padding:10px">Icon</th>
                                    <th style="padding:10px">Available</th>
                                    <th style="padding:10px">Delete</th>
                                    <th style="padding:10px">Update</th>
                                </tr>
                                @foreach ($facilities as $facility)
                                    <tr align="center">
                                        <td>{{ $facility->name }}</td>
                                        <td>{{ $facility->description }}</td>
                                        <td>
                                            @if ($facility->icon)
                                                <img height="100" width="100"
                                                    src="facility-icons/{{ $facility->icon }}">
                                            @else
                                                No Icon
                                            @endif
                                        </td>
                                        <td>{{ $facility->available ? 'Yes' : 'No' }}</td>
                                        <td>
                                            <a href="{{ url('deletefacility', $facility->id) }}" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this facility?')">Delete</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('updatefacility', $facility->id) }}"
                                                class="btn btn-primary">Update</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                @else
                    <p>No facilities available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- main-panel ends -->
