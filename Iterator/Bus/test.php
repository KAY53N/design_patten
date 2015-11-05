<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 迭代器模式【公交车售票】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';

$aggregate = new ConcreateAggregate();
$aggregate->setThis(0, '大鸟');
$aggregate->setThis(1, '小菜');
$aggregate->setThis(2, '行李');
$aggregate->setThis(3, '老外');
$aggregate->setThis(4, '公交内部员工');
$aggregate->setThis(5, '小偷');

$iterator = new ConcreateIterator($aggregate);

$item = $iterator->first();

while(!$iterator->isDone())
{
	echo sprintf('【%s】 请买车票！<hr>', $iterator->currentItem());
	$iterator->next();
}

