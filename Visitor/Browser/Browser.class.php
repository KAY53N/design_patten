<?php
/*
 * 浏览器抽象类
 */
abstract class Browser {
	public $name;
	public abstract function accept($visitor);
}