<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 原型模式【简历】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';


$resumeA = new Resume('Kaysen');
$resumeA->setPersonalInfo('男', '29');
$resumeA->setWorkExperience('1998-2000', 'XX公司');

$resumeB = $resumeA->copy();
$resumeB->setWorkExperience('1998-2006', 'YY企业');

$resumeC = $resumeA->copy();
$resumeC->setPersonalInfo('男', '24');

$resumeA->display();
$resumeB->display();
$resumeC->display();



