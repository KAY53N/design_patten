<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 策略模式【商场促销】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';

$test = CashFactory::createCashAccept('满300减100');
echo $test->acceptCash(400);