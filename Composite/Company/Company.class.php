<?php
abstract class Company {

	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	// 增加
	abstract function add($c);

	// 移除
	abstract function remove($c);

	// 显示
	abstract function display($depath);

	// 旅行职责
	abstract function lineOfDuty();
}