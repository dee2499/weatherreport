<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forecast Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Weather Forecast Result</h3>
                </div>
                <div class="card-body">
                    @if (isset($error))
                        <p>{{ $error }}</p>
                    @else
                        <p>Weather in {{ $weather->city }}: {{ $weather->weather }}</p>
                        <p>Temperature: {{ $weather->temperature }}°C</p>
                        <p>Humidity: {{ $weather->humidity }}%</p>
                        <p>Wind Speed: {{ $weather->wind_speed }} m/s</p>
                    @endif
                    <a href="{{ route('weather.form') }}" class="btn btn-primary">Back to form</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS (optional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
