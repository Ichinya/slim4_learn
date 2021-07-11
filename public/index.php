<?php

/**
 * Autoload vendors files
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Load common file
 */
$app = require __DIR__ . '/../bootstrap/app.php';

$app->run();