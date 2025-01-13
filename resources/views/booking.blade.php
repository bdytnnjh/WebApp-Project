@extends('master.layout')

@section('content')
<section class="booking-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Book Your Tour Guide</h1>
                    <p>Choose your tour guide, date, time, and location to experience the most unforgettable moment of your life</p>
                </div>
            </div>
        </div>
        <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6 form-group">
                    <label for="guide">Select Tour Guide</label>
                    <select name="guide_id" class="form-control" required>
                        <option value="" disabled selected>Select a guide</option>
                        @foreach($guides as $guide)
                            <option value="{{ $guide->id }}">{{ $guide->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 form-group">
                    <label for="date">Select Date</label>
                    <input type="date" name="date" class="form-control" required>
                </div>
                <div class="col-lg-6 form-group mt-3">
                    <label for="time">Select Time</label>
                    <input type="time" name="time" class="form-control" required>
                </div>
                <div class="col-lg-6 form-group mt-3">
                    <label for="location">Location</label>
                    <input type="text" name="location" placeholder="Enter tour location" class="form-control" required>
                </div>
                <div class="col-lg-12 form-group mt-3">
                    <label for="special_requests">Special Requests</label>
                    <textarea name="special_requests" class="form-control" rows="4" placeholder="Any additional requests?"></textarea>
                </div>
                <div class="col-lg-12 text-center mt-4">
                    <button type="submit" class="primary-btn">Book Now</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
