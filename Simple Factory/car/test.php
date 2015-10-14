<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 简单工厂设计模式【买车】
* Author: Kaysen
*/
define('ROOT_PATH', dirname(__FILE__));
require_once dirname(__FILE__) . '/../../Loader.php';

$test = CarFactory::BuyCar('Audi', 'Comfort');
var_dump($test);