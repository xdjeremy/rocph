@extends('layouts.dashboard')

@section('main-content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white p-4">
            <div class="flex items-center">
                <div class="text-4xl text-blue-500 font-bold">
                    {{ $attendances->count() }}
                </div>
                <div class="ml-4">
                    <p class="text-gray-700">Total Attendance</p>
                </div>
                <div class="ml-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-users-round">
                        <path d="M18 21a8 8 0 0 0-16 0" />
                        <circle cx="10" cy="8" r="5" />
                        <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white p-4">
            <div class="flex items-center">
                <div class="text-4xl text-blue-500 font-bold">
                    {{ $users->count() }}
                </div>
                <div class="ml-4">
                    <p class="text-gray-700">Full Time / Part Time Employment
                    </p>
                </div>
                <div class="ml-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-users-round">
                        <path d="M18 21a8 8 0 0 0-16 0" />
                        <circle cx="10" cy="8" r="5" />
                        <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white p-4">
            <div class="flex items-center">
                <div class="text-4xl text-blue-500 font-bold">
                    {{ $attendances->where('created_at', now()->format('Y-m-d'))->count() }}
                </div>
                <div class="ml-4">
                    <p class="text-gray-700">Attendance Today</p>
                </div>
                <div class="ml-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-users-round">
                        <path d="M18 21a8 8 0 0 0-16 0" />
                        <circle cx="10" cy="8" r="5" />
                        <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection
