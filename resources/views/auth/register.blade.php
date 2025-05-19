@extends('layouts.myapp')
@section('content')
    <div class="grid place-items-center">
        <div class="border p-5 md:w-1/2 w-4/5 bg-gray-100 my-12">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name : </label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 ">
                    @error('name')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address
                        : </label>
                    <input type="email" id="email" name="email" value="{{ old('name') }}"
                        class="bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 ">
                    @error('email')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        password :</label>
                    <input type="password" id="password"
                        class="bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 "
                        name="password">
                    @error('password')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Confirm password :</label>
                    <input type="password" id="password-confirm"
                        class="bg-red-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 "
                        name="password_confirmation">

                </div>
                </div>
                <button type="submit"
                    class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Register</button>

            </form>
        </div>
    </div>
    <script>
        var radios = document.querySelectorAll('input[type="radio"]');
        var images = document.querySelectorAll('.avatar');

        radios.forEach(function(radio, index) {
            radio.addEventListener('change', function() {
                if (this.checked) {
                    images.forEach(function(image, imageIndex) {
                        if (imageIndex === index) {
                            image.classList.add('border', 'border-red-600', 'rounded-full', 'p-1');
                        } else {
                            image.classList.remove('border', 'border-red-600', 'rounded-full',
                                'p-1');
                        }
                    });
                }
            });
        });
    </script>
@endsection
