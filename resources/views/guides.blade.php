@extends('master.layout')
@section('content')

<div style="background-image: url('{{ asset('img/iium.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh;">
    <section class="guides-area section-gap" id="guides">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-30 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10 text-black">Meet Our Tour Guides</h1>
                        <p class="text-black">Explore the world with our experienced and friendly tour guides.</p>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Add Button -->
            <div class="row mb-3">
                <div class="col-lg-8 offset-lg-2 text-left">
                    <a href="{{ route('guides.create') }}" class="btn btn-primary">Add New Guide</a>
                </div>
            </div>

            <!-- Display the List of Guides -->
            <div class="row">
                @foreach($guides as $guide)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            @php
                                // Set the image URL based on the guide's name
                                $imageUrl = '';
                                if ($guide->name === 'Dong Wook') {
                                    $imageUrl = asset('img/ldwc.jpg');
                                } elseif ($guide->name === 'Gong Yoo') {
                                    $imageUrl = asset('img/gy.jpg');
                                } elseif ($guide->name === 'Nuzul') {
                                    $imageUrl = asset('img/whj.jpg');
                                } else {
                                    $imageUrl = asset('img/default.jpg'); // Fallback image if needed
                                }
                            @endphp
                            <img src="{{ $imageUrl }}" class="card-img-top" alt="{{ $guide->name }}" style="width: 100%; height: auto; max-width: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $guide->name }}</h5>
                                <p class="card-text">{{ $guide->description }}</p>
                                <p class="card-text"><strong>Price:</strong> Free</p> <!-- Assuming all guides are free -->
                                <a class="btn btn-success">Book Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
</div>
@endsection
