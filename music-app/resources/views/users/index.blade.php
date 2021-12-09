@extends('dashboard')

@section('content')

<h3>users: </h3>

<a class="btn btn-primary" href="{{ route('users.create') }}">Create</a>
   
{{ $users->links() }}
<table class=" table table-striped table-hover">
  <thead>
    <tr>
      <th><a href="{{ route('users.index', ['sortBy' => 'name', 'direction' => 'asc'] ) }}">Name</a></th>
      <th><a href="{{ route('users.index', ['sortBy' => 'email', 'direction' => 'asc'] ) }}">Email</a></th>
      <th><a href="{{ route('users.index', ['sortBy' => 'role', 'direction' => 'asc'] ) }}">Role</a></th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th>{{$user->name}}</th>
      <th>{{$user->email}}</th>
      <th>{{$user->role}}</th>
      <td><a href="{{ route('users.show', $user->id) }}">Show Detail</a></td>
      <td><a href="{{ route('users.edit', $user->id) }}">Edit</a></td>
      <td>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
          @csrf
          @method('DELETE')
          <button class="btn btn-error" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $users->links() }}
@endsection