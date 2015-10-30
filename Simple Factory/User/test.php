<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 简单工厂设计模式【用户】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once dirname(__FILE__) . '/../../Loader.php';


$normalUser = UserFactory::createUser('Normal User', 'Kaysen');
$vipUser = UserFactory::createUser('Vip User', 'Segment');

var_dump($normalUser, $vipUser);