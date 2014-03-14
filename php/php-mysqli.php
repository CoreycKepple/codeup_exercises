<?php


// Get new instance of MySQLi object
$mysqli = @new mysqli('127.0.0.1', 'corey', 'password', 'codeup_mysqli_test_db');

// Check for errors
if ($mysqli->connect_errno) {
    throw new Exception('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Create the query and assign to var
$query = 'CREATE TABLE national_parks (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres FLOAT(10,2) DEFAULT 0,
    PRIMARY KEY (id)
);';

// Run query, if there are errors then display them
if (!$mysqli->query($query)) {
    throw new Exception("Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error);
}

$parks = [
			['name'=>'Acadia',
			'location'=>'Maine',
			'description'=>'Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, forest, and intertidal habitats.',
			'date_est'=>'1919-02-26',
			'acres'=>'47389.67'],
			['name'=>'American Samoa',
			'location'=> 'American Samoa',
			'description'=> 'The southernmost national park is on three Samoan islands and protects coral reefs, rainforests, volcanic mountains, and white beaches. The area is also home to flying foxes, brown boobies, sea turtles, and 900 species of fish.',
			'date_est'=> '1988-10-31',
			'acres'=> '9000.00'],
			['name'=>'Arches',
			'location'=> 'Utah',
			'description'=> 'This site features more than 2,000 natural sandstone arches, including the Delicate Arch. In a desert climate millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.',
			'date_est'=> '1971-10-12',
			'acres'=> '76518.98'],
			['name'=>'Badlands',
			'location'=> 'South Dakota',
			'description'=> "The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world''s richest fossil beds from the Oligocene epoch, and there is wildlife including bison, bighorn sheep, black-footed ferrets, and swift foxes.",
			'date_est'=> '1978-10-10',
			'acres'=> '242755.94'],
			['name'=>'Big Bend',
			'location'=> 'Texas',
			'description'=> "Named for the Bend of the Rio Grande along the US–Mexico border, this park includes a part of the Chihuahuan Desert. A wide variety of Cretaceous and Tertiary fossils as well as cultural artifacts of Native Americans exist within its borders.",
			'date_est'=> '1944-06-12',
			'acres'=> '801163.21'],
			['name'=>'Biscayne',
			'location'=> 'Florida',
			'description'=> "Located in Biscayne Bay, this park at the north end of the Florida Keys has four interrelated marine ecosystems: mangrove forest, the Bay, the Keys, and coral reefs. Threatened animals include the West Indian Manatee, American crocodile, various sea turtles, and peregrine falcon.",
			'date_est'=> '1980-06-28',
			'acres'=> '172924.07'],
			['name'=>'Black Canyon of the Gunnison',
			'location'=> 'Colorado',
			'description'=> "The park protects a quarter of the Gunnison River, which has dark canyon walls from the Precambrian era. The canyon has very steep descents, and it is a site for river rafting and rock climbing. The narrow, steep canyon, made of gneiss and schist, is often in shadow, appearing black.",
			'date_est'=> '1999-10-21',
			'acres'=> '32950.03'],
			['name'=>'Bryce Canyon',
			'location'=> 'Utah',
			'description'=> "Bryce Canyon is a giant natural amphitheatre along the Paunsaugunt Plateau. The unique area has hundreds of tall sandstone hoodoos formed by erosion. The region was originally settled by Native Americans and later by Mormon pioneers.",
			'date_est'=> '1928-02-25',
			'acres'=> '337597.83'],
			['name'=>'Canyonlands',
			'location'=> 'Utah',
			'description'=> "This landscape was eroded into canyons, buttes, and mesas by the Colorado River, Green River, and their tributaries, which divide the park into three districts. There are rock pinnacles and other naturally sculpted rock, as well as artifacts from Ancient Pueblo Peoples.",
			'date_est'=> '1964-09-12',
			'acres'=> '337597.83'],
			['name'=>'Capitol Reef',
			'location'=> 'Utah',
			'description'=> "The park''s Waterpocket Fold is a 100-mile (160 km) monocline that shows the Earth''s geologic layers. Other natural features are monoliths and sandstone domes and cliffs shaped like the United States Capitol.",
			'date_est'=> '1971-12-18',
			'acres'=> '241904.26']
		];

foreach ($parks as $value) {
	$query1 = "INSERT INTO national_parks (name, location, description, date_established, area_in_acres) VALUES ('{$value['name']}', '{$value['location']}', '{$value['description']}', '{$value['date_est']}', '{$value['acres']}');";
	if (!$mysqli->query($query1)) {
    	throw new Exception("Table insert failed: (" . $mysqli->errno . ") " . $mysqli->error);
	}
	
}