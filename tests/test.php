<?php

error_reporting(E_ALL);

include_once(dirname(__FILE__) . "/../src/Ifsnop/Mysqldump/Mysqldump.php");

use Ifsnop\Mysqldump as IMysqldump;

$dumpSettings = array(
    'compress' => IMysqldump\Mysqldump::NONE,
    'no-data' => false,
    'add-drop-table' => true,
    'single-transaction' => false,
    'lock-tables' => true,
    'add-locks' => true,
    'extended-insert' => false,
    'disable-foreign-keys-check' => false,
    'skip-triggers' => false,
    'add-drop-trigger' => true,
    'databases' => false,
    'add-drop-database' => false,
    'hex-blob' => true
    );

$dump = new IMysqldump\Mysqldump(
    "test001",
    "travis",
    "",
    "localhost",
    "mysql",
    $dumpSettings);

$dump->start("mysqldump-php.sql");

exit;
