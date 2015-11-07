<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 状态模式【工作状态】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';

$emergencyProjects = new Work();

$emergencyProjects->hour = 9;
$emergencyProjects->writeProgram();

$emergencyProjects->hour = 10;
$emergencyProjects->writeProgram();

$emergencyProjects->hour = 11;
$emergencyProjects->writeProgram();

$emergencyProjects->hour = 12;
$emergencyProjects->writeProgram();

$emergencyProjects->hour = 13;
$emergencyProjects->writeProgram();

$emergencyProjects->hour = 14;
$emergencyProjects->writeProgram();

$emergencyProjects->hour = 17;
$emergencyProjects->finish = false;
$emergencyProjects->writeProgram();

$emergencyProjects->hour = 19;
$emergencyProjects->writeProgram();

$emergencyProjects->hour = 22;
$emergencyProjects->writeProgram();
