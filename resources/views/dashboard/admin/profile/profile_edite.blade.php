@extends('dashboard.master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <h5 class="card-title">Profile Edit</h5>
                    <form method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">User Name</label>
                            <input type="text" name="user_name" id="user_name" value="{{$adminData->user_name}}" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">My Name</label>
                            <input type="text" name="name" id="name" value="{{$adminData->name}}" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" id="email" value="{{$adminData->email}}" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-1 col-form-label">Profile Image </label>
                            <div class="col-11">
                                <input name="profile_image" class="form-control" type="file"  id="image">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-1 col-form-label">  </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{(!empty($adminData->profile_image)) ? url('upload/admin_images/'.$adminData->profile_image) : url('upload/no_image.png') }}" width="75" height="75" alt="Card image cap">
                            </div>
                        </div>
                        <!-- end row -->
                        <button type="submit" class="btn btn-primary">Updated Profile</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>
@endsection
