<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\WeatherForecast;
use GuzzleHttp\Client;


class WeatherService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.openweathermap.org/data/2.5/',
        ]);
        $this->apiKey = config("services.openweathermap.key");
    }

    public function fetchWeatherData($city)
    {

        /*$url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$this->apiKey}&units=metric";*/
        $response = $this->client->get("weather?q={$city}&appid={$this->apiKey}&units=metric");

        return json_decode($response->getBody(), true);
    }

    public function storeWeatherData($data)
    {
        return WeatherForecast::create([
            "city" => $data["name"],
            "weather" => $data["weather"][0]["description"],
            "temperature" => $data["main"]["temp"],
            "humidity" => $data["main"]["humidity"],
            "wind_speed" => $data["wind"]["speed"],
        ]);
    }
}
