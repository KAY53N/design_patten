<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 访问者模式【设备访问】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';


$os = new ObjectStructure();

$pc = new PcBrowser();
$pc->name = '360';
$os->addVisitor($pc);

$mb = new MbBrowser();
$mb->name = 'uc';
$os->addVisitor($mb);

$visitor = new EquipmentAnalyze();
$os->handle($visitor);
