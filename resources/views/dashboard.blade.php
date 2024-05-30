@extends('layout')
@section('content')
<h1>Employee details</h1>

<ul>
    @foreach ($users as $user)
     <li>Name : {{ $user->name }}</li>
     <li>DOB :{{ $user->dob }}</li>
     <li>Address :{{ $user->address }}</li>
     <li>Email :{{ $user->email }}</li>
     <li>Contact :{{ $user->contact }}</li>
     <li>Designation :{{ $user->designation }}</li>
     <li>Username  :{{ $user->username }}</li>
    @endforeach



</ul>

@endsection
