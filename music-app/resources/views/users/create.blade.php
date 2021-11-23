@extends('dashboard')

@section('content')
<div class="column col-3">
    <h3>Add A User</h3>

    @if ($errors->any())
        <div class="toast toast-error">
            @foreach ($errors->all() as $error)
                <span>{{$error}}</span><br/>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{route('users.store')}}">
    @csrf
    @method('POST')
    <div class="form-group">
        @include('users.form')
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Store User</button>
        <a href="{{route('users.index')}}">Cancel</a>
    </div>

    </form>
</div>
    
@endsection