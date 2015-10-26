<?php
class ConcreteWebSite extends WebSite {
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function webuse()
	{
		echo sprintf('网站分类：%s <br />', $this->name);
	}
}