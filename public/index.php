<?php

declare(strict_types = 1);

use AnyTests\Database;

require_once (__DIR__.'/../vendor/autoload.php');

$connection = new Database();

print_r($connection->getConnection());