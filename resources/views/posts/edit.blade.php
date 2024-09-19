{{-- @extends('layouts.app')

@section('title') Edit @endsection
@section('content') --}}

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<x-app-layout>

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-3">
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
      <div class="max-w-xl">
        
        <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
              {{ __('Edit Post') }}
          </h2>
        </x-slot>

        <form method="POST" action="{{route('posts.update', $post->id)}}">
          @csrf
          @method('PUT')
          {{-- Title Input --}}
          <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="$post->title" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
          </div>

          {{-- Description Input --}}
          <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="$post->description" />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
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

          <x-primary-button>Update
            <button type="submit"></button>
          </x-primary-button>
        </form>
      
      </div>
    </div>
  </div>

</x-app-layout>

{{-- @endsection --}}