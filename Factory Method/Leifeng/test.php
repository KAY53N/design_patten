<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 工厂方法【学习雷锋】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once dirname(__FILE__) . '/../../Loader.php';

$factory = new UndergraduateFactory();
$student = $factory->createLeiFeng();

$student->buyRice();
$student->sweep();
$student->wash();




