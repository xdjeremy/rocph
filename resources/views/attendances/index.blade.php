@extends('layouts.dashboard')

@section('main-content')
    <div class="container">
        <h1 class="display-4 text-center my-4">Attendance Records</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Date</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                    <th>Department</th>
                    <th>Rating</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendances as $attendance)
                    <tr onclick="window.location='{{ route('attendances.edit', $attendance->id) }}'" style="cursor: pointer;">
                        <td>{{ $attendance->user->name }}</td>
                        <td>{{ $attendance->date }}</td>
                        <td>{{ $attendance->time_in }}</td>
                        <td>{{ $attendance->time_out }}</td>
                        <td>{{ $attendance->department }}</td>
                        <td>{{ $attendance->rating }}</td>
                        <td>{{ $attendance->comment }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
