<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 解释器模式【大写金额】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once dirname(__FILE__) . '/../../Loader.php';


###########################################################


$obj = new Interpreter();
$obj->execute('12345abc');