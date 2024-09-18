@extends('layouts.app')

@section('title') Index @endsection
@section('content')
    
<div class="text-center mt-4">
    <a href="{{route('posts.create')}}" class="btn btn-success" > Create Post</a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Posted By</th>
        <th scope="col">Created at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
      
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                <div>
                    <a href="{{route('posts.show', $post->id)}}" class="btn btn-info">View</a>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a>

                    <form style="display: inline" action="{{route('posts.delete', $post['id'])}}" method="post">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </td>
            </tr>
            
        @endforeach
    </tbody>
</table>
  
@endsection