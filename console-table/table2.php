<?php
require __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/data.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('sr.no.')
    ->addHeader('Id')
    ->addHeader('name')
    ->addHeader('address');
$i=1;
foreach($records as $record){
    $table->addRow()
        ->addColumn($i)
        ->addColumn($record['Id'])
        ->addColumn($record['name'])
        ->addColumn($record['address']);
	$i++;
}
$table->display();
?>