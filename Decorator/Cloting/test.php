<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 装饰模式【衣服搭配】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once dirname(__FILE__) . '/../../Loader.php';

$xiaocai = new Person('小菜');
echo '第一种装扮<br>';

$pqx = new Sneakers();
$kk = new Bigtrouser();
$dtx = new Tshirts();

$pqx->decorate($xiaocai);
$kk->decorate($pqx);
$dtx->decorate($kk);
$dtx->show();
