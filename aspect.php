<?php
include 'vendor/autoload.php'; // composer autoload

// $kernel = \AspectMock\Kernel::getInstance();
// $kernel->init([
//     'debug' => true,
//     'includePaths' => ['src']
// ]);



$kernel = \AspectMock\Kernel::getInstance();
$kernel->init([
    'appDir'    => 'src',
    'cacheDir'  => '_data',
    'includePaths' => ['src'],
    'excludePaths' => ['tests'] // tests dir should be excluded
]);
?>