<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\ShapeGenerateManager;

$shape = new ShapeGenerateManager(1);
$shape->process(length: 5, symbol: '*')->toDrawable();