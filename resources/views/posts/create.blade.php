@extends('layouts.app')

@section('title') Create @endsection
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

<form method="POST" action="{{route('posts.store')}}">
  @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="created-by" class="form-label">Created By</label>
          <select class="form-select" name="created_by" >
            <option selected>..</option>
              @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
          </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection