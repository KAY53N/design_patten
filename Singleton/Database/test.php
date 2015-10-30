<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 单例模式【数据库】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once dirname(__FILE__) . '/../../Loader.php';


$db1 = DB::getInstance()->dbConnect();

echo $db1.'<br>';

sleep(5);

$db2 = DB::getInstance()->dbConnect();

echo $db2;
