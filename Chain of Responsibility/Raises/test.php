<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 责任链模式【加薪】
 * Author: Kaysen
 */

define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';


$jinli = new CommonManager('金利');
$zongjian = new Majordomo('宗剑');
$zhongjingli = new GeneralManager('钟精励');

$jinli->setSuperior($zongjian);
$zongjian->setSuperior($zhongjingli);

$request = new Request();
$request->setRequestType('请假');
$request->setRequestContent('小菜请假');
$request->setNumber('1');
$jinli->requestApplications($request);

$request2 = new Request();
$request2->setRequestType('请假');
$request2->setRequestContent('小菜请假');
$request2->setNumber('4');
$jinli->requestApplications($request2);

$request3 = new Request();
$request3->setRequestType('加薪');
$request3->setRequestContent('小菜请求加薪');
$request3->setNumber('500');
$jinli->requestApplications($request3);

$request4 = new Request();
$request4->setRequestType('加薪');
$request4->setRequestContent('小菜请求加薪');
$jinli->requestApplications($request4);




