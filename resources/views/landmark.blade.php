<!DOCTYPE html>
<html>
<head>
    <title>Add Landmark</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add a New Landmark</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('landmarks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="landmark_name" class="form-label">Landmark Name</label>
                <input type="text" name="landmark_name" class="form-control" id="landmark_name" required>
            </div>
            <div class="mb-3">
                <label for="short_term_name" class="form-label">Short Term Name</label>
                <input type="text" name="short_term_name" class="form-control" id="short_term_name" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="number" step="any" name="latitude" class="form-control" id="latitude" required>
            </div>
            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="number" step="any" name="longitude" class="form-control" id="longitude" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Landmark</button>
        </form>
        <div class="mt-4">
            <h4>Google Maps Link</h4>
            <p>Click here:
               <a href="https://www.google.com/maps?q={{ old('latitude', 0) }},{{ old('longitude', 0) }}" target="_blank">
                  View on Google Maps
               </a>
            </p>
        </div>
    </div>
</body>
</html>
