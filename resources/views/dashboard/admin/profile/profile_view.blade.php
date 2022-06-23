@extends('dashboard.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card"><br><br>
                <center>
                    <img class="rounded-circle avatar-xl" width="75" height="75" src="{{ (!empty($adminData->profile_image)) ? url('upload/admin_images/'.$adminData->profile_image) : url('upload/no_image.png') }}" alt="Card image cap">
                </center>

                <div class="card-body">
                    <h6 class="card-title">User Name : {{ $adminData->user_name }} </h6>
                    <h6 class="card-title">Name : {{ $adminData->name }} </h6>

                    <h6 class="card-title">User Email : {{ $adminData->email }} </h6>



                    <a href="{{route('admin.profile.edit')}}" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>

                </div>
            </div>
        </div>

    </div>
    <br>
@endsection
