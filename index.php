<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\ShapeGenerateManager;

$shape = new ShapeGenerateManager(9);
$shape->process(length: 5, symbol: '*')->toDrawable();
// print_r($shape->process(length: 5, symbol: '*')->toStdArray());