@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center">Submitted Feedback</h1>

    @if($feedbacks->isEmpty())
    <p class="text-center">No feedback has been submitted.</p>
    @else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>feedback</th>
                <th>Date Submitted</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedback as $feedback)
            <tr>
                <td>{{$feedback->name}}</td>
                <td>{{$feedback->email}}</td>
                <td>{{$feedback->feedback}}</td>
                <td>{{$feedback->created_at->formate('d M Y, h:i A')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
