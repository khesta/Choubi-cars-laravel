@extends('layouts.myapp')
@section('content')
    <div class="grid place-items-center h-screen" style="">
        <div class="border p-5 md:w-1/2 w-4/5 bg-gray-100 -mt-48">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        email</label>
                    <input type="email" id="email" name="email" value={{ old('email') ? old('email') : 'test_user@email.com'}}
                        class="bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 "
                        placeholder="test_user@email.com">
                    @error('email')
                        <span>
                            <strong class="text-red-500">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        password</label>
                    <input type="password" id="password"
                        class="bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 "
                        placeholder="Demo for test: pass1234" value="pass1234" name="password">
                    @error('password')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="flex items-start mb-6">
                    
                </div>
                <button type="submit"
                    class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Login</button>

                @if (Route::has('password.request'))
                    <a class="m-2 text-gray-600 hover:text-blue-600 hover:cursor-pointer" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <div class="mt-4 ">
                        Don't have account yet? <a class="font-medium hover:text-red-500" href="{{route('register')}}">register here</a>
                </div>
            </form>
        </div>
    </div>
@endsection
