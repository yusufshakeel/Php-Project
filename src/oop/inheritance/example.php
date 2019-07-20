<?php

require_once __DIR__ . '/ParentClass.php';
require_once __DIR__ . '/ChildClass.php';

$obj = new ChildClass("Hello");
echo $obj->getName() . PHP_EOL;