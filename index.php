<?php require 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Weather</title>
</head>
<body>
    <div class="main-page">
        <div class="weather-wrapper">
            <div class="weather-section night-mode">
                <div class="container">
                    <div class="name-of-city"> khmelnytskyi </div>
                    <div class="weather-discription">
                        <div class="weather-icon">
                            <img class="current-icon" src="icons/<?= $currentIcon ?> " alt="">
                            <span class="description"> <?= $description ?> </span>
                        </div>
                        <div class="weekday-wrapper">
                            <div class="weekday"> <?= date( "l" ); ?> </div>
                            <div class="temperature"><?= $currentTemperature ?> &#176;C</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="weather-section night-mode">
                <div class="container">
                    <div class="name-of-city">Description...</div>
                    <div class="ext-weather">
                        <ul>
                            <div class="wrapper">
                                <li>Clouds  </li>
                                <span class='clouds'>  <?= $clouds ?> %</span>
                            </div>
                            <div class="wrapper">
                                <li>Feels like  </li>
                                <span class="feels-like"> <?= $feelsLike ?> &#176;C </span>
                            </div>
                            <div class="wrapper">
                                <li>Humidity</li>
                                <span class='humidity'> <?= $humidity  ?>% </span>
                            </div>
                            <div class="wrapper">
                                <li>Wind </li>
                                <span class='wind' data-wind="<?= $wind ?>">&darr;</span>
                            </div>
                            <div class="wrapper">
                                <li>Wind speed </li>
                                <span class='wind-speed'> <?= $windSpeed ?> M/S </span>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="weather-section  weather-for-all-day night-mode">
                <div class="week-wrapper">

                    <?php  for($i = 0; $i < 5; $i++): ?>

                    <div class="wrapper">
                        <div class="day"> <?= mb_substr($dataWeek->list[$i]->dt_txt, 11, -3) ?> </div>
                        <img class="w-icon-week" src="icons/<?= $dataWeek->list[$i]->weather[0]->icon ?>.png" alt="">
                        <div class="temp-after"> <?= round($dataWeek->list[$i]->main->temp - 273)  ?> &#176;C</div>
                    </div>
                   
                    <?php  endfor; ?>

                </div>
            </div>
        </div>
    </div>

    <script src="script/script.js"></script>
</body>
</html>