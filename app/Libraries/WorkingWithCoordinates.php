<?php

namespace App\Libraries;
use Goutte\Client;

class WorkingWithCoordinates

{
    function __construct()
    {

    }
    public function get_weather($coordinates)
    {
        if (strpos($coordinates, " ") != false) {
            $coordinates = str_replace(" ", "", $coordinates);
        }

        $url_weather_analyzer = 'https://weather.com/ru-BY/weather/today/l/' . trim($coordinates, " ");

        $client = new Client();
        $crawler = $client->request('GET', $url_weather_analyzer);


        $temperature = $crawler->filterXPath('//html//body//div[1]//main//div[2]
        //main//div[1]//div//section//div//div[2]//div[1]//div[1]//span')->text();
        $general_weather = $crawler->filterXPath("//html//body//div[1]//main//div[2]
        //main/div[1]//div//section//div//div[2]//div[1]//div[1]//div[1]")->text();
        $day_night_weather = $crawler->filterXPath('//html//body//div[1]//main//div[2]
        //main//div[1]//div//section//div//div[2]//div[1]//div[1]//div[2]')->text();
        $city_name = $crawler->filterXPath('//html//body//div[1]//main//div[2]//main//div[1]
        //div//section//div//div[1]//h1')->text();

        $weather = array("temperature" => $temperature, "general_weather" => $general_weather,
            "day_night_weather" => $day_night_weather, "city_name" => $city_name);
        return $weather;

    }
}