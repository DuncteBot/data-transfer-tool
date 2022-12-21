<?php

namespace Duncte123\DataTransferTool;

require __DIR__ . '/../vendor/autoload.php';

$mapper = new DataMapper();
$mysql = new MysqlDB();
$psql = new PsqlDB();
