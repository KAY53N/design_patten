<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 备忘录模式【游戏进度保存】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';

echo '大战BOSS前'.PHP_EOL;
$lixiaoyao = new GameRole();
$lixiaoyao->getInitState();
$lixiaoyao->stateDisplay();

echo '保存进度'.PHP_EOL.PHP_EOL;
$stateAdmin = new RoleStateCaretaker();
$stateAdmin->memento = $lixiaoyao->saveState();

echo '大战BOSS时，损耗严重'.PHP_EOL;
$lixiaoyao->fight();
$lixiaoyao->stateDisplay();


echo '恢复之前状态'.PHP_EOL;
$lixiaoyao->recoveryState($stateAdmin->memento);
$lixiaoyao->stateDisplay();

