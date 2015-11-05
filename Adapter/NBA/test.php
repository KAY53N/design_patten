<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 适配器模式【NBA】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';

$b = new Forwards('巴蒂尔');
$b->attack();

$m = new Guards('麦克格雷迪');
$m->attack();

$ym = new Translator('姚明');
$ym->attack();
$ym->defense();