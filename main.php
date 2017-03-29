<?php

$autoloader = include "vendor/autoload.php";
require './generated-conf/config.php';
use \Hello\Hello\Tabellavuota as TestTable;

$var = new TestTable();
$var->setIdKey("12");
$var->setName("none");
$var->setSurname("me");
$var->setDescription("me");
$var->save();
print($var->toJSON());


$author = TestTable::create()->findPK();

$defaultLogger = new Logger('defaultLogger');
$defaultLogger->pushHandler(new StreamHandler('/var/log/propel.log',Logger::WARNING));
Propel::getServiceContainer()->setLogger('defaultLogger',$defaultLogger);