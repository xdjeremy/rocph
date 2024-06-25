@extends('layouts.dashboard')

@section('main-content')
    <div class="container">
        <h1 class="display-4 text-center my-4">Edit Attendance</h1>
        <div class="mb-3">
            <a href="{{ route('attendances.index') }}" class="btn btn-secondary">Go Back</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('attendances.update', $attendance->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="user_id">User</label>
                <input type="text" class="form-control text-gray-400" id="user_id"
                    value="{{ $attendance->user->name }}" disabled>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control text-gray-400" id="date" name="date"
                    value="{{ $attendance->date }}" disabled>
            </div>
            <div class="form-group">
                <label for="time_in">Time In</label>
                <input type="text" class="form-control text-gray-400" id="time_in" name="time_in"
                    value="{{ $attendance->time_in }}" disabled>
            </div>
            <div class="form-group">
                <label for="time_out">Time Out</label>
                <input type="text" class="form-control text-gray-400" id="time_out" name="time_out"
                    value="{{ $attendance->time_out }}" disabled>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control text-gray-400" id="department" name="department"
                    value="{{ $attendance->department }}" disabled>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <select class="form-control" id="rating" name="rating">
                    <option value="1" {{ $attendance->rating == 1 ? 'selected' : '' }}>1</option>
                    <option value="2" {{ $attendance->rating == 2 ? 'selected' : '' }}>2</option>
                    <option value="3" {{ $attendance->rating == 3 ? 'selected' : '' }}>3</option>
                    <option value="4" {{ $attendance->rating == 4 ? 'selected' : '' }}>4</option>
                    <option value="5" {{ $attendance->rating == 5 ? 'selected' : '' }}>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea class="form-control" id="comment" name="comment">{{ $attendance->comment }}</textarea>
            </div>


            <button type="submit" class="btn btn-primary mt-3">Update Attendance</button>
        </form>
    </div>
@endsection
