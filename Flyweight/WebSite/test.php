<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 享元模式【做网站】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once dirname(__FILE__) . '/../../Loader.php';


###########################################################

$f = new WebSiteFactory();

$fx = $f->getWebSiteCategory('产品展示');
$fx->webuse();

$fx = $f->getWebSiteCategory('产品展示');
$fx->webuse();

$fx = $f->getWebSiteCategory('博客');
$fx->webuse();

echo $f->getWebSiteCount();

