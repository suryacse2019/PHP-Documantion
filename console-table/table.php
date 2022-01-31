<?php
require __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/data.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Id')
    ->addHeader('name')
    ->addHeader('address')
    ->addRow()
        ->addColumn('1001')
        ->addColumn('suraj yadav')
        ->addColumn('jaunpur')
    ->addRow()
        ->addColumn('1002')
        ->addColumn('mahesh')
        ->addColumn('lucknow')
    ->addRow()
        ->addColumn('1003')
        ->addColumn('babu')
        ->addColumn('varanasi')
	->addRow()
        ->addColumn('1004')
        ->addColumn('tannu singh')
        ->addColumn('prayagraj')
    ->display()
;
?>