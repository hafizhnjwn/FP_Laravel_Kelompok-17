<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
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
            <div class="container" align="center" style="padding-top:100px">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{ url('store_facility') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px">
                        <label>Facility Name</label>
                        <input type="text" style="color:black" name="name" placeholder="Facility name" required>
                    </div>

                    <div style="padding:15px">
                        <label>Facility Description</label>
                        <textarea style="color:black" name="description" placeholder="Facility description" required></textarea>
                    </div>

                    <div style="padding:15px">
                        <label>Facility Icon</label>
                        <input type="file" name="icon">
                    </div>

                    <div style="padding:15px">
                        <input type="submit" class="btn btn-success" value="Add Facility">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.script')
</body>
</html>
