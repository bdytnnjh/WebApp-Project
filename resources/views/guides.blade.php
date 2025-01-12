@extends('master.layout')

@section('content')
    <section class="guides-area section-gap" id="guides">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-30 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Meet Our Tour Guides</h1>
                        <p>Explore the world with our experienced and friendly tour guides.</p>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Display the List of Guides -->
            <div class="row">
                @foreach($guides as $guide)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ $guide->image_url }}" class="card-img-top" alt="{{ $guide->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $guide->name }}</h5>
                                <p class="card-text">{{ $guide->description }}</p>
                                <p class="card-text"><strong>Price:</strong> Free</p> <!-- Assuming all guides are free -->
                                <a class="btn btn-success">Book Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div

        </div>
    </section>
@endsection
