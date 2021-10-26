@extends('layout')

@section('content')
<div class="column col-3">
    <h3>Add A Musician</h3>

    @if ($errors->any())
        <div class="toast toast-error">
            @foreach ($errors->all() as $error)
                <span>{{$error}}</span><br/>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{route('musicians.store')}}">
    @csrf
    @method('POST')
    <div class="form-group">
        @include('musicians.form')
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Store Musician</button>
        <a href="{{route('musicians.index')}}">Cancel</a>
    </div>

    </form>
</div>
    
@endsection