@extends('layouts.app')

@section('head')
    <title>Posts</title>
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{ route('posts') }}" method="post" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea 
                        type="text" 
                        id="body" 
                        name="body" 
                        placeholder="Post somethings" 
                        class="bg-grey-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                        value="{{ old('body') }}"
                        rows="6"
                    ></textarea>

                    @error('body')
                        <div class="text-red-500 mt-1 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                </div>
            </form>

            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="bg-slate-50 p-2 mb-3">
                        <div class="text-md text-gray-500 font-bold flex w-full">
                            <p class="w-1/2">{{ ucfirst($post->user->name) }}</p>
                            <p class="w-1/2 text-right"> {{ $post->user->created_at->diffForHumans() }} </p> 
                        </div> 
                        {{$post->body}}
                    </div>
                @endforeach
                
                <div class="mt-8">
                    {{ $posts->links() }}
                </div>
            @else
                <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection