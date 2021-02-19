<?php

require_once __DIR__ . '/vendor/autoload.php';

use shmurakami\sandbox\App;
use shmurakami\sandbox\Foo;

$app = new App();

//$foo = $app->foo(false);
$foo = $app->foo(true);
echo $app->bar($foo);
