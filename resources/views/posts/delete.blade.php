@extends('layouts.app')

@section('title') create @endsection
@section('content')
@csrf
<div class="alert alert-danger"  role="alert">
    <div class="mb-3">
        <h2>Warning! are you sure you want to delete this post?</h2>
    </div>
    <a href="{{route('posts.index')}}">
        <button type="submit" class="btn btn-danger">Delete</button>
    </a>
</div>
@endsection