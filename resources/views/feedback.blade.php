@extends('master.layout')

@section('content')
<div class="container">
    <form class="form-area" id="feedbackForm" action="{{ route('feedback.store') }}" method="POST">
        @csrf
    <section class="feedback-area section-gap" id="feedback">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Provide us feedback for us to imporve</h1>
                        <p>Who are in extremely love with eco-friendly system.</p>
                    </div>
                </div>
            </div>
            <form class="form-area" id="feedbackForm" action="mail.php" method="post">
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <input name="name" placeholder="Enter your name" class="common-input mb-20 form-control" required="" type="text">
                        <input name="email" placeholder="Enter email address" class="common-input mb-20 form-control" required="" type="email">
                        <input name="phoneNo" placeholder="Enter your phone number" class="common-input mb-20 form-control" required="" type="text">
                    </div>
                    <div class="col-lg-6 form-group">
                        <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Message" required=""></textarea>
                        <button class="primary-btn mt-20" type="submit">Send Message<span class="lnr lnr-arrow-right"></span></button>
                        <div class="alert-msg"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
