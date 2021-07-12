<?php

/**
 * Autoload vendors files
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Load common file
 */
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->run();