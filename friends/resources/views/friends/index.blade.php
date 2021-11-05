@extends('dashboard')

@section('content')

<h3>Friends</h3>

<a class="btn btn-primary" href="{{route('friends.create')}}">Create</a>

<div class="">{{ $friends->links() }}</div>

<table class=" table table-striped table-hover">

    <thead>
        <tr>
          <th>
            <a href="{{ route('friends.index', ['sortBy' => 'first_name', 'direction' => 'asc'] ) }}">First Name</a>
          </th>
          <th>Last Name</th>
          <th>Age</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($friends as $friend)
        <tr>
          <td>{{$friend->first_name}}</td>
          <td>{{$friend->last_name}}</td>
          <td>{{$friend->age}}</td>
          <td><a href="{{ route('friends.show', $friend->id) }}">Show Detail</a></td>
          <td><a href="{{ route('friends.edit', $friend->id) }}">Edit</a></td>
          <td>
            <form action="{{ route('friends.destroy', $friend->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your friend?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-error" type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>

</table> 

{{ $friends->links() }}
@endsection
