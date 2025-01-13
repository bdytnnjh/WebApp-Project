<!DOCTYPE html>
<html>
<head>
    <title>IIUM Map</title>
    <style>
        .map {
            background: url('public\img\iium map.png') no-repeat;
            width: 800px; /* Adjust as needed */
            height: 600px; /* Adjust as needed */
            position: relative;
        }
        .landmark {
            position: absolute;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="map">
        @foreach($landmarks as $landmark)
            <div class="landmark" style="left: {{ $landmark->x_coordinate }}px; top: {{ $landmark->y_coordinate }}px;" title="{{ $landmark->description }}">
                {{ $landmark->name }}
            </div>
        @endforeach
    </div>
</body>
</html>
