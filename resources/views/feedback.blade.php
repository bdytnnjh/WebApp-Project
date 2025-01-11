@extends('master.layout')
@section('content')

    <div class="container">
        <h1 class="text-center">Feedback Form</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('feedback.submit') }}" method="POST">
            @csrf

            <!--Name Input-->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <!--Email Input-->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <!--Feedback Input-->
            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" class="form-control" rows="5" required></textarea>
            </div>

            <!--Submit Button-->
            <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </form>
    </div>
    @endsection
