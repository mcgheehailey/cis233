@extends('dashboard')

@section('content')

<h3>Show User Details</h3>

<p>{{$user->name}}</p>
<p>{{$user->email}}</p>
<p>{{$user->role}}</p>

<p>
    <a href="{{ route('users.index') }}">All Users</a>
</p>

@endsection