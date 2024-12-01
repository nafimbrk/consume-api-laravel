<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $apiKey = 'YOUR_API_KEY';

        $client = new Client();

        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=Lamongan&units=metric&appid={$apiKey}";

        try {
            $response = $client->get($apiUrl);

            $data = json_decode($response->getBody(), true);

            return view('weather', ['weatherData' => $data]);
        } catch (\Throwable $e) {
            return view('api_error', ['error' => $e->getMessage()]);
        }
    }
}
