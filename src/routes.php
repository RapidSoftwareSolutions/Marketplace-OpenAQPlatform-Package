<?php
$routes = [
    'metadata',
    'getCitiesList',
    'getCountriesList',
    'getLatestValue',
    'getLocationList',
    'getMeasurementsData',
    'getParametersList',
    'getSourcesList'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

