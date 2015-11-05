<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 桥接模式【手机游戏】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';


$moto = new HandsetBrandMotorola();
$nokia = new HandsetBrandNokia();

$game = new HandsetGame();
$addressList = new HandsetAddressList();

$moto->setHandsetSoft($game);
echo $moto->thisBrand . ' === ' . $moto->run() . '<hr>';

$nokia->setHandsetSoft($addressList);
echo $nokia->thisBrand . ' === ' . $nokia->run() . '<hr>';

