<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 中介者模式【联合国安理会】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';

$unsc = new UnitedNationsSecurityCouncil();

$usa = new USA($unsc);
$iraq = new Iraq($unsc);

$unsc->setColleague1($usa);
$unsc->setColleague2($iraq);

$usa->declarex('不准研制核武器，否则要发动战争！');
$iraq->declarex('我们没有核武器，也不怕侵略。');
