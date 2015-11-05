<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 代理模式【追求者送礼物】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';


$jiaojiao = new SchoolGirl();
$jiaojiao->setName('李娇娇');

$daili = new Proxy($jiaojiao);
$daili->giveChocolate();
$daili->giveDolls();
$daili->giveFlowers();