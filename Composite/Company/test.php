<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 组合模式【公司管理系统】
 * Author: Kaysen
 */

define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';


$root = new ConCreateCompaly('北京总公司');
$root->add(new HRDepartment('总公司人力资源部'));
$root->add(new FinanceDepartment('总公司财务部'));

$shanghaiCompaly = new ConCreateCompaly('上海华东分公司');
$shanghaiCompaly->add(new HRDepartment('华东分公司人力资源部'));
$shanghaiCompaly->add(new FinanceDepartment('华东分公司财务部'));
$root->add($shanghaiCompaly);

$nanjingCompaly = new ConCreateCompaly('南京办事处');
$nanjingCompaly->add(new HRDepartment('南京办事处人力资源部'));
$nanjingCompaly->add(new FinanceDepartment('南京办事处财务部'));
$root->add($nanjingCompaly);

$hangzhouCompaly = new ConCreateCompaly('杭州办事处');
$hangzhouCompaly->add(new HRDepartment('杭州办事处人力资源部'));
$hangzhouCompaly->add(new FinanceDepartment('杭州办事处财务部'));
$root->add($hangzhouCompaly);

echo '结构图';
$root->display(1);

echo '<br><br><br>';

echo '职责';
$root->lineOfDuty();