<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 建造者模式【造人】
 * Author: Kaysen
 */

define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';

$person = new PersonThinBuilder(300, 300);
$pdThin = new PersonDirector($person);
$pdThin->createPerson();

/*
$person = new PersonFatBuilder(300, 300);
$pdThin = new PersonDirector($person);
$pdThin->createPerson();
*/
