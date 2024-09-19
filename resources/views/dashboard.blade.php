<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row">
                        @foreach ($posts as $post )
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title">{{$post->title}}</h2>
                                        <p class="card-text">{{$post->description}}</p>
                                        <div>
                                            <small>created By: {{$post->user->name}}</small>
                                        </div>
                                        <div>
                                            <small>Comments: {{ $comments->where('post_id', $post->id)->count() }}</small>
                                        </div>
                                        <div class=" d-flex justify-content-end">
                                            <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
