@extends('layouts.myapp')
@section('content')

    <div class="mt-6 mb-2 grid md:grid-cols-3  justify-center items-center mx-auto max-w-screen-xl">
        @foreach ($cars as $car)
            <div
                class="relative md:m-10 m-4w flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="{{ route('car.reservation', ['car' => $car->id]) }}">
                    <img loading="lazy" class="object-cover" src="{{ $car->image }}" alt="product image" />
                    <span
                        class="absolute top-0 left-0 m-2 rounded-full bg-red-500 px-2 text-center text-sm font-medium text-white">{{ $car->reduce }}
                        %
                        OFF</span>
                </a>
                <div class="mt-4 px-5 pb-5">
                    <div>
                        <h5 class=" font-bold text-xl tracking-tight text-slate-900">{{ $car->brand }} {{ $car->model }}
                            {{ $car->engine }}</h5>
                    </div>
                    <div class="mt-2 mb-5 flex items-center justify-between">
                        <p>
                            <span class="text-3xl font-bold text-slate-900">
                                {{ floatval($car->price_per_day) }} DH
                            </span>


                        </p>

                        <div class="flex items-center">
                            @for ($i = 0; $i < $car->stars; $i++)
                                <svg aria-hidden="true" class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            @endfor
                            <span
                                class="mr-2 ml-3 rounded bg-red-500 px-2.5 py-0.5 text-xs font-semibold text-white">{{ $car->stars }}</span>
                        </div>
                    </div>
                    <a href="{{ route('car.reservation', ['car' => $car->id]) }}"
                        class="flex items-center justify-center rounded-md bg-red-500 hover:bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <svg id="thisicon" class="mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="1em"
                            viewBox="0 0 512 512">
                            <style>
                                #thisicon {
                                    fill: #ffffff
                                }
                            </style>
                            <path
                                d="M184 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H96c-35.3 0-64 28.7-64 64v16 48V448c0 35.3 28.7 64 64 64H416c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H376V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H184V24zM80 192H432V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V192zm176 40c-13.3 0-24 10.7-24 24v48H184c-13.3 0-24 10.7-24 24s10.7 24 24 24h48v48c0 13.3 10.7 24 24 24s24-10.7 24-24V352h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H280V256c0-13.3-10.7-24-24-24z" />
                        </svg>
                        Reserve </a>
                </div>
            </div>
        @endforeach
    </div>


    <div class="flex justify-center mb-12 w-full">
        {{ $cars->links('pagination::tailwind') }}
    </div>
@endsection
