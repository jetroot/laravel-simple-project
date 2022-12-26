@extends('layouts.app')

@section('head')
    <title>Register</title>
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        placeholder="Your name" 
                        class="bg-grey-100 border-2 w-full p-2 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}"
                    />

                    @error('name')
                        <div class="text-red-500 mt-1 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

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
                        placeholder="Choose a password" 
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
                    <label for="password_confirmation" class="sr-only">Password Confirmation</label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        placeholder="Repeat your password" 
                        class="bg-grey-100 border-2 w-full p-2 rounded-lg  @error('password_confirmation') border-red-500 @enderror"
                        value=""
                    />
                    @error('password_confirmation')
                        <div class="text-red-500 mt-1 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div>
                    <button 
                        type="submit"
                        class="bg-blue-500 text-white px-4 py-3 rounded w-full"
                    >Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection