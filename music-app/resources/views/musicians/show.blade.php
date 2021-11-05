@extends('dashboard')

@section('content')

<h3>Show Musician Details</h3>

<p>{{$musician->first_name}}</p>
<p>{{$musician->last_name}}</p>
<p>{{$musician->instrument}}</p>
<p>{{$musician->website}}</p>

<p>
    <a href="{{ route('musicians.index') }}">All Musicians</a>
</p>

@endsection