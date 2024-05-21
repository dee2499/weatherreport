<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeatherRequest;
use App\Http\Resources\WeatherForecastResource;
use App\Services\WeatherService;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function showWeatherForm()
    {
        return view('weather.form');
    }

    public function getWeather(WeatherRequest $request)
    {
        try {
            $city = $request->input('city');

            $weatherData = $this->weatherService->fetchWeatherData($city);
            if ($weatherData) {
                $weather = $this->weatherService->storeWeatherData($weatherData);
                /*example to use resource class in api response*/
                $weatherResources = new WeatherForecastResource($weatherData);

                return view('weather.result', ['weather' => $weather]);
            }
        } catch (ClientException $e) {
            if ($e->getResponse()->getStatusCode() == 404) {
                return view('weather.result', ['error' => 'City not found']);
            }
            return view('weather.result', ['error' => 'Error fetching weather data']);
        }

        return view('weather.result', ['error' => 'Could not fetch weather data']);
    }
}