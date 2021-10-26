@extends('layout')

@section('content')

<h3>Musicians: </h3>

<a class="btn btn-primary" href="{{route('musicians.create')}}">Create</a>
   
{{ $musicians->links() }}
<table class=" table table-striped table-hover">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Instrument</th>
      <th>Website</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  
  <tbody>
    @foreach ($musicians as $musician)
    <tr>
      <th>{{$musician->first_name}}</th>
      <th>{{$musician->last_name}}</th>
      <th>{{$musician->instrument}}</th>
      <th><a href="{{$musician->website}}" >{{substr(($musician->website), 0, 100)}}</a></th>
      <td><a href="{{ route('musicians.show', $musician->id) }}">Show Detail</a></td>
      <td><a href="{{ route('musicians.edit', $musician->id) }}">Edit</a></td>
      <td>
        <form action="{{ route('musicians.destroy', $musician->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Musician?')">
          @csrf
          @method('DELETE')
          <button class="btn btn-error" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $musicians->links() }}
@endsection