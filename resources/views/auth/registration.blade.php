@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h2>Registration Page</h2>
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                <form me
                <form method="post" action="{{ route('registration.post') }}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-4">Name</label>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                        </div>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4">DOB</label>
                        <div class="col-md-8">
                            <input type="date" name="dob" class="form-control" placeholder="Enter your Date of Birth">
                        </div>
                        @if ($errors->has('dob'))
                            <span class="text-danger">{{ $errors->first('dob') }}</span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4">Address</label>
                        <div class="col-md-8">
                            <input type="text" name="address" class="form-control" placeholder="Enter your Address">
                        </div>
                        @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                    </div>



                    <div class="form-group row">
                        <lable class="col-md-4">Email</lable>
                        <div class="col-md-8">
                            <input type="text" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4">Contact</label>
                        <div class="col-md-8">
                            <input type="text" name="contact" class="form-control" placeholder="Enter your Contact">
                        </div>
                        @if ($errors->has('contact'))
                            <span class="text-danger">{{ $errors->first('contact') }}</span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4">Designation</label>
                        <div class="col-md-8">
                            <input type="text" name="designation" class="form-control" placeholder="Enter your designation">
                        </div>
                        @if ($errors->has('designation'))
                            <span class="text-danger">{{ $errors->first('designation') }}</span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4">Username</label>
                        <div class="col-md-8">
                            <input type="text" name="username" class="form-control" placeholder="Enter your Username">
                        </div>
                        @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                    </div>


                    <div class="form-group row">
                        <lable class="col-md-4">Password</lable>
                        <div class="col-md-8">
                            <input type="password" name="password" class="form-control" placeholder="Enter your Name">
                        </div>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <input type="submit" name="submit" class="btn btn-success" value="Submit" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
