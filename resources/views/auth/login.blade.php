@extends('layouts.app')

@section('content')
    <div class="container mx-auto h-screen flex justify-center items-center">
        <div class="w-full max-w-3xl">
            <div class="bg-white md:shadow-md rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2 bg-white p-8">
                        <div class="text-center mb-4">
                            <img src="/logo.png" alt="Logo" class="mx-auto h-auto w-64">
                        </div>
                        <h3 class="text-center text-red mb-4 text-xl font-semibold">{{ __('Sign In') }}</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-4">
                                <input id="email" type="email"
                                    class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="{{ __('Email') }}">

                                @error('email')
                                    <span class="text-red-500 text-sm mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <input id="password" type="password"
                                    class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                                    required autocomplete="current-password" placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="text-red-500 text-sm mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4 text-center">
                                <button type="submit"
                                    class="btn btn-primary w-full bg-blue-500 text-white py-2 rounded-full">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="text-blue-500 hover:underline" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                    <div class="w-full hidden md:w-1/2 bg-blue-500 text-white p-8 md:flex flex-col justify-center items-center">
                        <h3 class="text-center mb-4 text-xl font-semibold">{{ __('Be a Part of Our Team') }}</h3>
                        <p class="text-center mb-4">
                            {{ __('Submit your application to join our vibrant and fulfilling team at ROC.PH. Be a part of a productive work environment. Apply now and start a rewarding career with us!') }}
                        </p>
                        <a href="{{ route('register') }}"
                            class="btn btn-light w-full bg-white text-blue-500 py-2 rounded-full">
                            {{ __('Sign Up') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
