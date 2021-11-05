@extends('dashboard')

@section('content')
<div class="column col-3">
    <h3>Make a friend</h3>
    @if ($errors->any())
        <div class="toast toast-error">
            @foreach ($errors->all() as $error)
                <span>{{$error}}</span><br/>
            @endforeach
        </div>
    @endif
    <form method="POST" action="{{route('friends.store')}}">
        @csrf
        @method('POST')
    <div class="form-group">
        @include('friends.form')
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Store Friend</button>
        <a href="{{route('friends.index')}}">Cancel</a>
    </div>

    </form>
</div>
    
@endsection