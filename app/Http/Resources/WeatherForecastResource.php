<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WeatherForecastResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'city' => $this->city,
            'weather' => $this->weather,
            'temperature' => $this->temperature,
            'humidity' => $this->humidity,
            'wind_speed' => $this->wind_speed,
        ];
    }
}