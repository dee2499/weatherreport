# Weather Forecast Application

A weather forecast application built using Laravel for backend development and a frontend technology of your choice. This application retrieves weather data from the OpenWeatherMap API, stores it in an SQLite database, and displays it to users.

## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [Database Schema](#database-schema)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Features
- Fetch current weather data for a specified city from OpenWeatherMap API.
- Store weather data in an SQLite database.
- Display weather conditions, temperature, humidity, and wind speed.
- User-friendly interface for searching and displaying weather data.
- Error handling for invalid city names or failed API requests.
- Optional: Caching to reduce API requests and unit tests for service class and controllers.

## Installation
1. Clone the repository:
    ```bash
    git clone https://github.com/dee2499/weatherreport.git
    cd weather-forecast-app
    ```

2. Install the dependencies:
    ```bash
    composer install
    ```

3. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```bash
    cp .env.example .env
    ```

4. Generate the application key:
    ```bash
    php artisan key:generate
    ```

5. Set up the database:
    ```bash
    touch database/database.sqlite
    php artisan migrate
    ```

6. Run the development server:
    ```bash
    php artisan serve
    ```

## Usage
1. Open your browser and go to `http://localhost:8000`.
2. Enter a city name in the search bar and click "Get Weather".
3. View the weather forecast for the specified city.

## API Endpoints
- `GET https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric`: Fetch weather data for the specified city.

## Database Schema
The `weather_forecasts` table schema:
- `id` - integer, primary key
- `city` - string
- `weather` - string
- `temperature` - float
- `humidity` - integer
- `wind_speed` - float
- `created_at` - timestamp
- `updated_at` - timestamp

## Testing
1. Run the tests:
    ```bash
    php artisan test
    ```

## Contributing
1. Fork the repository.
2. Create a new branch:
    ```bash
    git checkout -b feature-branch
    ```
3. Make your changes and commit them:
    ```bash
    git commit -m 'Add some feature'
    ```
4. Push to the branch:
    ```bash
    git push origin feature-branch
    ```
5. Open a pull request.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
