@extends('layouts.app')

@section('title') Show @endsection

@section('content')
<div class="mt-4">
    <div class="card">
        <div class="card-header">
          Post Info
        </div>
        <div class="card-body">
          <h5 class="card-title">Title:{{$post->title}} </h5>
          <p class="card-text">Description: {{$post['description']}}</p>
        </div>
    </div>
</div>
<div class="mt-4">
    <div class="card">
        <div class="card-header">
          Creator Info
        </div>
        <div class="card-body">
          <h5 class="card-title">Created By: {{$post->user->name}}</h5>
          <p class="card-text">Email: {{$post->user->email}}</p>
        </div>
    </div>
</div>
@endsection