<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Infromation</title>
</head>
<body>
    <h1>Current Weather In {{ $weatherData['name'] }}</h1>
    <p>Description: {{ $weatherData['weather'][0]['description'] }}</p>
    <p>Temperature: {{ $weatherData['main']['temp'] }} &#8451;</p>
</body>
</html>