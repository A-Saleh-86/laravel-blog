@extends('layouts.app')

@section('title') Edit @endsection
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('posts.update', $post->id)}}">
  @csrf
  @method('PUT')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" value="{{$post->title}}" name="title" id="title" >
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3">{{$post->description}}</textarea>
      </div>
      <div class="mb-3">
        <label for="created-by" class="form-label">Created By</label>
          <select class="form-select" name="post_creator" >
            @foreach ($users as $user)
              <option value="{{$user->id}}"
                @if ($post->created_by == $user->id)
                 {{ 'selected' }} 
                @endif>
                {{$user->name}}
              </option>
            @endforeach
          </select>
      </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection