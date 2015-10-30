<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 抽象工厂模式【多类型数据库】
 * Author: Kaysen
 */

$dirList = 'User'.DIRECTORY_SEPARATOR . '; ';
$dirList .= 'Department'.DIRECTORY_SEPARATOR;

define('__AUTOLOAD_DIR__', $dirList);
define('ROOT_PATH', dirname(__FILE__));

require_once dirname(__FILE__) . '/../../Loader.php';

$user = new User();
$dept = new Department();

$IUser = DataAccess::createUser();
$IUser->insert($user);
$IUser->getUser(1);


$IDepar = DataAccess::createDepartment();
$IDepar->insert($dept);
$IDepar->getDepartment(2);

