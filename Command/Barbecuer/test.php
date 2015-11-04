<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 命令模式【烧烤店】
* Author: Kaysen
*/

define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';


// 开店前的准备
$boy = new Barbecuer();
$bakeMuttonCommand = new BakeMuttonCommand($boy);
$bakeChickenWingCommand = new BakeChickenWingCommand($boy);
$girl = new Waiter();

// 开门营业
$girl->setOrder($bakeMuttonCommand, 2);
$girl->setOrder($bakeChickenWingCommand, 4);
$girl->cancelOrder($bakeChickenWingCommand);

$girl->notify();




