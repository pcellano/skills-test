<?php

require_once ('/home/pcellano/skils-test/employee.php');
require_once ('/home/pcellano/skils-test/tailor.php');
require_once ('/home/pcellano/skils-test/artist.php');

$jack = new Artist(20.00);
$jack->setTimeIn([
    '08:00',
    '08:00'
]);
$jack->setTimeOut([
    '17:00',
    '17:00'
]);

$hours = $jack->getHours($jack->getTimeIn(), $jack->getTimeOut());
$salary = $jack->calculate($jack->getRate(), $hours);
echo "\n (Artis)Jack: $salary\n";


$jane = new Tailor(30.00);

$jane->pieces(5);
$salary2 = $jane->calculate($jane->getPieces(), $jane->getRate());

echo "\n (Tailor)Jane: $salary2\n";
