<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>
    
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
 @include('admin.sidebar')

<!-- partial -->

@include('admin.navbar')

<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <div class="container" align="center" style="padding:10px;">
        @if(session()->has('message'))
        <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
        </div>
        @endif
        <form action="{{url('updateberita', $data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px">
            <label>Update Title</label>
            <input type="text" style="color:black" name="title" placeholder="Write the title">
            </div>

            <div style="padding:15px">
                <label>Update News</label>
                <input type="msg" style="color:black" name="content" placeholder="Write the content">
            </div>
            <div style="padding:15px">
                <label>Old Image</label>
                <img height="150" width="150" src="newsimage/{{$data->image}}">
            </div>
            <div style="padding:15px">
                <label>Change Image</label>
                <input type="file" name="file">
            </div>
            <div style="padding:15px">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>



    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>