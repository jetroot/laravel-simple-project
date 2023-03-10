@extends('layouts.app')

@section('head')
    <title>Login</title>
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">

            @if (session('status'))
                <div class="bg-red-500 rounded-lg text-white text-center p-2 mb-3">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input 
                        type="text" 
                        id="email" 
                        name="email" 
                        placeholder="Email" 
                        class="bg-grey-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                        <div class="text-red-500 mt-1 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Password" 
                        class="bg-grey-100 border-2 w-full p-2 rounded-lg @error('password') border-red-500 @enderror"
                        value=""
                    />
                    @error('password')
                        <div class="text-red-500 mt-1 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <div>
                    <button 
                        type="submit"
                        class="bg-blue-500 text-white px-4 py-3 rounded w-full"
                    >Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection