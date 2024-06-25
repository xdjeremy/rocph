@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="h-screen w-64 bg-blue-600 text-white flex flex-col items-center py-4">
            <div class="flex flex-row items-center gap-2">
                <img src="{{ asset('/logo.png') }}" alt="Logo" class="w-16 h-16 mb-6" style="width: 4rem; height: 4rem;">
                <span class="text-lg font-bold ml-2">
                    ROC.PH
                </span>
            </div>
            <a href="/" class="w-full py-3 px-4 flex items-center hover:bg-blue-700">
                <i class="fas fa-clock mr-3"></i> Dashboard
            </a>
            <a href="/attendances" class="w-full py-3 px-4 flex items-center hover:bg-blue-700">
                <i class="fas fa-clock mr-3"></i> Attendances
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                class="w-full py-3 px-4 flex items-center hover:bg-blue-700">
                @csrf
                <button type="submit" class="w-full text-left flex items-center">
                    <i class="fas fa-clock mr-3"></i> Logout
                </button>
            </form>

        </div>
        <div class="flex-1 p-6">
            @yield('main-content')
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection
