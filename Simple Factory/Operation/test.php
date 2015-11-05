<?php
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';

$opra = OperationFactory::createOperation('+');
$opra->setNumberA(11);
$opra->setNumberB(33);
echo $opra->getResult();