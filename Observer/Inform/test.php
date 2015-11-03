<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 观察者模式【通知】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';


// 老板胡汉三
$huhansan = new Boss();

// 看股票的同事
$tongshi1 = new StockObserver('魏关姹', $huhansan);

// 看NBA的同事
$tongshi2 = new NBAObserver('易管查', $huhansan);

$huhansan->attach($tongshi1);
$huhansan->attach($tongshi2);

//$huhansan->detach($tongshi1);

// 老板回来
$huhansan->setSubjectStatus('我胡汉三回来了!');

// 发出通知
$huhansan->notify();
