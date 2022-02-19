<?php

$city = 'khmelnytskyi';
$apiKey = '4442602d86a62fb9fa4633cc7b417388';
$url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . '&lang=ru&units=metric&appid=' . $apiKey;
$urlWeek = 'http://api.openweathermap.org/data/2.5/forecast?q='. $city .'&appid=' . $apiKey;


$ch = curl_init();
$ch2 = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_URL, $urlWeek);



$data = json_decode(curl_exec($ch));
$dataWeek = json_decode(curl_exec($ch2));
 

curl_close($ch);
curl_close($ch2);


$currentTemperature = round($data->main->temp);
$currentIcon = $data->weather[0]->icon .'.png';
$clouds = $data->clouds->all;
$feelsLike = round($data->main->feels_like);
$humidity = $data->main->humidity;
$windSpeed = $data->wind->speed;
$description = $data->weather[0]->main;
$wind = $data->wind->deg;

