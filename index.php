<?php
require_once __DIR__.'/vendor/autoload.php';

use Norberts\Nacho\Nacho;

$nachos = new Nacho();
echo $nachos->hasCheese();