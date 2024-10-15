<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <base href="/public">
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding:100px;">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{ url('updatefacility', $facility->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px">
                        <label>Update Facility Name</label>
                        <input type="text" style="color:black" name="name" value="{{ $facility->name }}" required>
                    </div>

                    <div style="padding:15px">
                        <label>Update Description</label>
                        <textarea style="color:black" name="description" required>{{ $facility->description }}</textarea>
                    </div>

                    <div style="padding:15px">
                        <label>Current Icon</label>
                        <img height="150" width="150" src="{{ asset('facility-icons/' . $facility->icon) }}">
                    </div>

                    <div style="padding:15px">
                        <label>Change Icon</label>
                        <input type="file" name="icon">
                    </div>

                    <div style="padding:15px">
                        <input type="submit" class="btn btn-primary" value="Update Facility">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.script')
</body>
</html>
