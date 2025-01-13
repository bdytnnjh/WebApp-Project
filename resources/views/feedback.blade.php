@extends('master.layout')

@section('content')
<section class="contact-area section-gap" id="feedback">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Provide us feedback for us to improve</h1>
                    <p>Let us know your thoughts.</p>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form class="form-area" method="POST" action="{{ route('feedbacks.store') }}">
            @csrf
            <div class="row">
                <div class="col-lg-6 form-group">
                    <input name="name" placeholder="Enter your name" class="common-input mb-20 form-control" required type="text">
                    <input name="email" placeholder="Enter email address" class="common-input mb-20 form-control" required type="email">
                    <input name="phoneNo" placeholder="Enter your phone number" class="common-input mb-20 form-control" required type="text">
                </div>
                <div class="col-lg-6 form-group">
                    <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Message" required></textarea>
                    <button class="primary-btn mt-20">Submit Feedback<span class="lnr lnr-arrow-right"></span></button>
                </div>
            </div>
        </form>

        <div class="row mt-5">
            <div class="col-lg-12">
                <h2 class="text-center">Feedback List</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($feedbacks as $feedback)
                        <tr>
                            <td class="text-left">{{ $feedback->name }}</td>
                            <td class="text-danger fw-bold">{{ $feedback->email }}</td>
                            <td class="text-success">{{ $feedback->phoneNo }}</td>
                            <td class="text-primary">{{ $feedback->message }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-danger">No records found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
