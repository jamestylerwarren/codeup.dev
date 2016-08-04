<?php


require 'db_connect.php';

$query = 'TRUNCATE TABLE national_parks';

$dbc->exec($query);

$details = [
    ['name' => 'Arches', 'location' => 'UT', 'date_established' => '1971-11-12', 'area_in_acres' => '76518.98', 'description' => 'This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch. In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.'],
    ['name' => 'Big Bend', 'location' => 'TX', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21', 'description' => 'Named for the prominent bend in the Rio Grande along the US–Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert. Its main attraction is backcountry recreation in the arid Chisos Mountains and in canyons along the river. A wide variety of Cretaceous and Tertiary fossils as well as cultural artifacts of Native Americans also exist within its borders.'],
    ['name' => 'Carlsbad Caverns', 'location' => 'NM', 'date_established' => '1930-05-14', 'area_in_acres' => '46766.45', 'description' => 'Carlsbad Caverns has 117 caves, the longest of which is over 120 miles (190 km) long. The Big Room is almost 4,000 feet (1,200 m) long, and the caves are home to over 400,000 Mexican free-tailed bats and sixteen other species. Above ground are the Chihuahuan Desert and Rattlesnake Springs.'],
    ['name' => 'Channel Islands', 'location' => 'CA', 'date_established' => '1980-03-05', 'area_in_acres' => '249561.00', 'description' => 'Five of the eight Channel Islands are protected, and half of the park\'s area is underwater. The islands have a unique Mediterranean ecosystem originally settled by the Chumash people. They are home to over 2,000 species of land plants and animals, and 145 are unique to them, including the island fox. Professional ferry services offer transportation to the islands from the mainland.'],
    ['name' => 'Crater Lake', 'location' => 'OR', 'date_established' => '1902-05-22', 'area_in_acres' => '183224.05', 'description' => 'Crater Lake lies in the caldera of an ancient volcano called Mount Mazama that collapsed 7,700 years ago. It is the deepest lake in the United States and is famous for its vivid blue color and water clarity. There are two more recent volcanic islands in the lake, and, with no inlets or outlets, all water comes through precipitation.'],
    ['name' => 'Death Valley', 'location' => 'NV', 'date_established' => '1994-10-31', 'area_in_acres' => '3372401.96', 'description' => 'Death Valley is the hottest, lowest, and driest place in the United States. Daytime temperatures have topped 130 °F (54 °C) and it is home to Badwater Basin, the lowest elevation in North America. A diversity of colorful canyons, desolate badlands, shifting sand dunes, sprawling mountains, and over 1000 species of plants populate this geologic graben. Additional points of interest include salt flats, historic mines, and springs.'],
    ['name' => 'Glacier',   'location' => 'MT', 'date_established' => '1910-05-11', 'area_in_acres' => '1013572.41', 'description' => 'The U.S. half of Waterton-Glacier International Peace Park, this park hosts 26 glaciers and 130 named lakes beneath a stunning canopy of Rocky Mountain peaks. There are historic hotels and a landmark road in this region of rapidly receding glaciers. The local mountains, formed by an overthrust, expose the world\'s best-preserved sedimentary fossils from the Proterozoic era.'],
    ['name' => 'Grand Canyon', 'location' => 'AZ', 'date_established' => '1919-02-26', 'area_in_acres' => '1217403.32', 'description' => 'The Grand Canyon, carved by the mighty Colorado River, is 277 miles (446 km) long, up to 1 mile (1.6 km) deep, and up to 15 miles (24 km) wide. Millions of years of erosion have exposed the colorful layers of the Colorado Plateau in countless mesas and canyon walls, visible from both the north and south rims, or from a number of trails that descend into the canyon itself.'],
    ['name' => 'Kobuk Valley', 'location' => 'AK', 'date_established' => '1980-12-02', 'area_in_acres' => '1750716.50', 'description' => 'Kobuk Valley protects 61 miles (98 km) of the Kobuk River and three regions of sand dunes. Created by glaciers, the Great Kobuk, Little Kobuk, and Hunt River Sand Dunes can reach 100 feet (30 m) high and 100 °F (38 °C), and they are the largest dunes in the Arctic. Twice a year, half a million caribou migrate through the dunes and across river bluffs that expose well-preserved ice age fossils.'],
    ['name' => 'Mammoth Cave', 'location' => 'KY', 'date_established' => '1941-07-01', 'area_in_acres' => '52830.19', 'description' => 'With more than 400 miles (640 km) of passageways explored, Mammoth Cave is by far the world\'s longest cave system. Subterranean wildlife includes eight bat species, Kentucky cave shrimp, Northern cavefish, and cave salamanders. Above ground, the park provides recreation on the Green River, 70 miles of hiking trails, and plenty of sinkholes and springs.']
];

$stmt = $dbc->prepare("INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)");

foreach ($details as $detail) {
    $stmt->bindvalue(':name', $detail['name'], PDO::PARAM_STR);
    $stmt->bindvalue(':location', $detail['location'], PDO::PARAM_STR);
    $stmt->bindvalue(':date_established', $detail['date_established'], PDO::PARAM_STR);
    $stmt->bindvalue(':area_in_acres', $detail['area_in_acres'], PDO::PARAM_INT);
    $stmt->bindvalue(':description', $detail['description'], PDO::PARAM_STR);

    $stmt->execute();

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}