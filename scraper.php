<?php

$city=$_GET['city'];

$city=str_replace(" ", "", $city);

$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

preg_match('/7 Day Weather Forecast Summary:<\/b><span class="read-more-small">(.*?)<\/span><\/span><\/span>/', $contents, $matches);

echo $matches[1];


?>


