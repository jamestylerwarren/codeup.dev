<?php

require 'db_connect.php';

$query = 'DROP TABLE IF EXISTS national_parks';

$dbc->exec($query);

$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(100) NOT NULL,
    date_established date NOT NULL,
    area_in_acres double(40, 2) NOT NULL,
    description VARCHAR(1000) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);
