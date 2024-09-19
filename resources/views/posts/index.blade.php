{{-- @extends('layouts.app')

@section('title') Index @endsection
@section('content') --}}
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>

    {{-- Create new Post Button --}}
    <div class="text-center mt-4">
        <x-primary-button>
            <a href="{{route('posts.create')}}" > Create Post</a>
        </x-primary-button>
        
    </div>

    {{-- Table of Posts --}}
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-3">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="w-full"> <!-- Change max-w-xl to w-full -->
                <table class="table w-full"> <!-- Add w-full to table -->
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
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <div>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View</a>
                                    
                                    @if ($user == $post->user_id)
                                        
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
    
                                    <form style="display: inline" action="{{ route('posts.delete', $post['id']) }}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
{{-- @endsection --}}