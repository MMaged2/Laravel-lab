@extends('layouts.app')
@section('title') Edit @endsection
@section('content')

<form action="{{route('posts.update',$post['id'])}}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('title', $post->title)}}">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <textarea size="3" name="description" class="form-control" id="exampleInputdesc">{{$post['description']}}
        </textarea>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Post Creator</label>
        <select class="form-control" id="exampleInputPostcreator" name="user_id">
            @foreach ($allUsers as $user)
               <option selected>{{$user->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection