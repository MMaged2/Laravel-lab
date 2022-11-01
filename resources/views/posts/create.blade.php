@extends('layouts.app')
@section('title') create @endsection
@section('content')
<form method="POST" action="{{route('posts.store')}}">
      @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @if($errors->has('title'))
              <h4 style="color: red;">Title Error: Must be > 3</h4>
              @endif
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <textarea name="description" class="form-control"></textarea>
                @if($errors->has('description'))
              <h4 style="color: red;">Description Error: Must be > 10</h4>
              @endif
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Post Creator</label>
                <select name="post_creator" class="form-control">
                  @foreach ($allUsers as $user)
                    <option value="{{$user->id}}">{{ $user->name }}</option>
                  @endforeach
                </select>
              </div>

    <button type="submit" class="btn btn-success">Create</button>
</form>

@endsection