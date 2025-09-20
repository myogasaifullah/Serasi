<?php

// Simple test script to trigger Laravel exception renderer
require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Enable debug mode for testing
config(['app.debug' => true]);

// Throw a test exception
throw new Exception('This is a test exception to verify the Laravel exception renderer components are working correctly.');
