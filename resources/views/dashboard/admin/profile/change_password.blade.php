@extends('dashboard.master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <h5 class="card-title">Change Password</h5>

                    @if(count($errors))
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show ">{{$error}}</p>
                        @endforeach
                    @endif
                    <form method="post" action="{{ route('admin.profile.update.password') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Old Password</label>
                            <input type="password" name="old_password" id="old_password" class="form-control"
                                   aria-describedby="emailHelp" placeholder="Enter Old Password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">New Password</label>
                            <input type="password" name="new_password" id="new_password" class="form-control"
                                   aria-describedby="emailHelp" placeholder="Enter New Password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                                   aria-describedby="emailHelp" placeholder="Confirm New Password">
                        </div>


                        <!-- end row -->
                        <button type="submit" class="btn btn-primary">Updated Password</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection
