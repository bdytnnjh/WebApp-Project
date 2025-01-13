@extends('layout.master')

@section('content')
<section class="feedback-list section-gap">
    <div class="container">
        <h1>Feedback Received</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->phoneNo }}</td>
                    <td>{{ $feedback->message }}</td>
                    <td>{{ $feedback->created_at->format('d M Y, h:i A') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
