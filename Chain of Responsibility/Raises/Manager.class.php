<?php
abstract class Manager {
	protected $name, $superior;

	public function __construct($name)
	{
		$this->name = $name;
	}

	// 设置管理者的上级
	public function setSuperior($superior)
	{
		$this->superior = $superior;
	}

	// 申请请求
	abstract function requestApplications($request);
}
