{{-- @extends('layouts.app')

@section('title') Show @endsection

@section('content') --}}
<x-app-layout>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Post Details') }}
    </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
          
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
          <div class="max-w-xl">
            <header>
              <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                  {{ __('Post Info') }}
              </h2>
      
              <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Title:{{$post->title}}
              </p>
              <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Description: {{$post['description']}}
              </p>
            </header>
          </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
              <header>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __(' Creator Info') }}
                </h2>
        
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                  Created By: {{$post->user->name}}
                </p>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                  Email: {{$post->user->email}}
                </p>
              </header>
            </div>
        </div>

      </div>
  </div>

  {{-- Comments --}}
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

    <!-- Comments Box -->
    <div class="bg-white shadow-md rounded-lg p-6 mt-8">
        <h2 class="text-xl font-semibold mb-4">Comments</h2>

        <!-- Display Comments -->
        @if ($post->comments->count())
            <div class="space-y-4">
                @foreach ($post->comments as $comment)
                    <div class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                        <div class="flex items-center mb-2">
                            <span class="font-semibold">{{ $comment->user->name }}</span>
                            <span class="text-gray-500 text-sm ml-2">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                        <p>{{ $comment->content }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-500">No comments yet.</p>
        @endif

        <!-- Comment Form -->
        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-6">

            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">

            <div class="mb-4">
                <textarea name="content" rows="4" class="form-textarea mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Add a comment..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</x-app-layout>
{{-- @endsection --}}