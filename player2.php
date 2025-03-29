<?php
// Create a new SimpleXMLElement object to represent the root <cricket> element
$xml = new SimpleXMLElement('<cricket/>');

// Add player data to the XML
$player1 = $xml->addChild('player');
$player1->addChild('name', 'Abe');
$player1->addChild('runs', '120');
$player1->addChild('wickets', '20');

$player2 = $xml->addChild('player');
$player2->addChild('name', 'John');
$player2->addChild('runs', '95');
$player2->addChild('wickets', '30');

$player3 = $xml->addChild('player');
$player3->addChild('name', 'Sam');
$player3->addChild('runs', '150');
$player3->addChild('wickets', '10');

$player4 = $xml->addChild('player');
$player4->addChild('name', 'Tom');
$player4->addChild('runs', '80');
$player4->addChild('wickets', '25');

$player5 = $xml->addChild('player');
$player5->addChild('name', 'Harry');
$player5->addChild('runs', '130');
$player5->addChild('wickets', '15');

// Save the XML to a file
$xml->asXML('players.xml');

// Load the XML from the file
$xml = simplexml_load_file('players.xml');

// Display players who have scored more than 100 runs
echo "<h2>Players who have scored more than 100 runs:</h2>";

foreach ($xml->player as $player) {
    if ((int)$player->runs > 100) {
        echo "<b>Name:</b> " . $player->name . "<br>";
        echo "<b>Runs:</b> " . $player->runs . "<br>";
        echo "<b>Wickets:</b> " . $player->wickets . "<br><br>";
    }
}
?>

