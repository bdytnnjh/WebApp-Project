<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIAM Tour Guide</title>
    <style>
        /* Style for the map container */
        #map-container {
            position: relative;
            width: 800px; /* Set your desired map width */
            height: 600px; /* Set your desired map height */
            margin: auto;
            background: url('/images/uiam_map.png') no-repeat center center;
            background-size: cover;
            border: 1px solid #ccc;
        }

        /* Style for the landmarks (pins) */
        .landmark {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: red;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }

        /* Tooltip for landmark details */
        .tooltip {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            white-space: nowrap;
        }

        .landmark:hover + .tooltip {
            display: block;
        }
    </style>
</head>
<body>
    <h1>UIAM Tour Guide Map</h1>
    <div id="map-container">
        @foreach ($landmarks as $landmark)
            <!-- Add landmark points -->
            <div 
                class="landmark"
                style="top: {{ $landmark->latitude }}%; left: {{ $landmark->longitude }}%;"
                title="{{ $landmark->name }}"
            ></div>
            <div class="tooltip" style="top: {{ $landmark->latitude + 1 }}%; left: {{ $landmark->longitude + 1 }}%;">
                <b>{{ $landmark->name }}</b><br>{{ $landmark->description }}
            </div>
        @endforeach
    </div>
</body>
</html>
