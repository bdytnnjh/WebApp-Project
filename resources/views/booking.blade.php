@extends('master.layout')

@section('content')
    <section class="booking-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Book Your Tour Guide</h1>
                        <p>Choose your tour guide, date, time, and location to experience the most unforgettable moment of
                            your life</p>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label for="guide">Select Tour Guide</label>
                        <select name="tour_guide_id" class="form-control" required>
                            <option value="" disabled selected>Select a guide</option>
                            @foreach ($guides as $guide)
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
                        <input type="text" name="location" placeholder="Enter tour location" class="form-control"
                            required>
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
        <div class="container mt-4">
            <h1 class="mb-4">List of Bookings</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tour Guide</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Special Requests</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bookings as $booking)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $booking->name ?? 'N/A' }}</td>
                            <td>{{ $booking->date }}</td>
                            <td>{{ $booking->time }}</td>
                            <td>{{ $booking->location }}</td>
                            <td>{{ $booking->special_requests }}</td>
                            <td>
                                <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('bookings.edit', $booking->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No bookings found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
