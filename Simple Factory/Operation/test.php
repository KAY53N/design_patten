<?php
define('ROOT_PATH', dirname(__FILE__));
require_once dirname(__FILE__) . '/../../Loader.php';

$opra = OperationFactory::createOperation('+');
$opra->setNumberA(11);
$opra->setNumberB(33);
echo $opra->getResult();