<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 外观模式【股票】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once dirname(__FILE__) . '/../../Loader.php';


$jijin = new Fund();
$jijin->buyFund();
$jijin->sellFund();