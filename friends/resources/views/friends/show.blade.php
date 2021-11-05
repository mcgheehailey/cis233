@extends('dashboard')

@section('content')

<h3>Show Friend Details</h3>

<p>
    {{$friend->first_name}}
</p>

<p>
    <a href="{{ route('friends.index') }}">All Friends</a>
</p>

@endsection