<?php


require 'db_connect.php';

$query = 'TRUNCATE TABLE national_parks';

$dbc->exec($query);

$details = [
    ['name' => 'Arches', 'location' => 'UT', 'date_established' => '1971-11-12', 'area_in_acres' => '76518.98'],
    ['name' => 'Big Bend', 'location' => 'TX', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21'],
    ['name' => 'Carlsbad Caverns', 'location' => 'NM', 'date_established' => '1930-05-14', 'area_in_acres' => '46766.45'],
    ['name' => 'Channel Islands', 'location' => 'CA', 'date_established' => '1980-03-05', 'area_in_acres' => '249561.00'],
    ['name' => 'Crater Lake', 'location' => 'OR', 'date_established' => '1902-05-22', 'area_in_acres' => '183224.05'],
    ['name' => 'Death Valley', 'location' => 'NV', 'date_established' => '1994-10-31', 'area_in_acres' => '3372401.96'],
    ['name' => 'Glacier',   'location' => 'MT', 'date_established' => '1910-05-11', 'area_in_acres' => '1013572.41'],
    ['name' => 'Grand Canyon', 'location' => 'AZ', 'date_established' => '1919-02-26', 'area_in_acres' => '1217403.32'],
    ['name' => 'Kobuk Valley', 'location' => 'AK', 'date_established' => '1980-12-02', 'area_in_acres' => '1750716.50'],
    ['name' => 'Mammoth Cave', 'location' => 'KY', 'date_established' => '1941-07-01', 'area_in_acres' => '52830.19']
];

foreach ($details as $detail) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$detail['name']}', '{$detail['location']}', '{$detail['date_established']}', '{$detail['area_in_acres']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}