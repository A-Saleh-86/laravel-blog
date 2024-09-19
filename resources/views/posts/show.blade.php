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

</x-app-layout>
{{-- @endsection --}}