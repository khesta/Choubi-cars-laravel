@extends('layouts.myapp')

@section('content')
    <div class="grid place-items-center">
        <div class="border p-5 md:w-1/2 mx-4 bg-white my-12 shadow-lg rounded-lg">
            <form method="POST" action="{{ route('addNewAdmin') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name Field -->
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name :</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="w-full p-2.5 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
                    @error('name')
                        <span class="text-sm text-red-600"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email Address :</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="w-full p-2.5 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
                    @error('email')
                        <span class="text-sm text-red-600"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <!-- Avatar Selection -->
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900">Choose Avatar :</label>
                    <div class="flex flex-wrap justify-center gap-4">
                        @for ($i = 1; $i <= 6; $i++)
                            <div class="flex justify-center">
                                <input type="radio" name="avatar_option" value="/images/avatars/avatar_{{ $i }}.jpg" id="avatar_{{ $i }}" class="hidden">
                                <label for="avatar_{{ $i }}">
                                    <img loading="lazy" class="avatar w-12 cursor-pointer rounded-full hover:border-yellow-500" src="/images/avatars/avatar_{{ $i }}.jpg" alt="Avatar {{ $i }}">
                                </label>
                            </div>
                        @endfor
                    </div>
                    <div class="mt-4 text-center">
                        <p class="text-sm text-gray-600">OR</p>
                    </div>
                    <div class="mt-4">
                        <input type="file" name="avatar_choose" id="file_input"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                    </div>
                </div>

                <!-- Password Field -->
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password :</label>
                    <input type="password" id="password" name="password"
                        class="w-full p-2.5 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
                    @error('password')
                        <span class="text-sm text-red-600"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-6">
                    <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password :</label>
                    <input type="password" id="password-confirm" name="password_confirmation"
                        class="w-full p-2.5 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
                </div>

                <!-- Submit Button -->
                
                <button type="submit"
                    class="w-full sm:w-auto px-5 py-2.5 text-sm font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 rounded-lg text-center transition-colors duration-200">
                    Add New Admin
                </button>
            </form>
        </div>
    </div>

    <!-- Script for Avatar Selection -->
    <script>
        document.querySelectorAll('input[name="avatar_option"]').forEach((radio) => {
            radio.addEventListener('change', (e) => {
                document.querySelectorAll('.avatar').forEach((img) => {
                    img.classList.remove('border-yellow-500', 'border-2', 'p-1');
                });
                if (e.target.checked) {
                    e.target.nextElementSibling.querySelector('.avatar').classList.add('border-yellow-500', 'border-2', 'p-1');
                }
            });
        });
    </script>
@endsection
