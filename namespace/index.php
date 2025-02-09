<?php

// include("Libs\Math\Circle.php");
// include("Libs\Math\Square.php");
// include("Support\Log.php");

include("autoload.php");

use Libs\Math\Circle;
use Libs\Math\Square;
use Support\Log;

$circle = new Circle();
$circle->area();

$square = new Square();
$square->area();

$log = new Log();
$log->get();
