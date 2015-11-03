<?php
// 翻译者
class Translator extends Player {
	private $wjzf;

	public function __construct($name)
	{
		$this->wjzf = new ForeignCenter();
		$this->wjzf->setName($name);
	}

	public function attack()
	{
		$this->wjzf->JINGONG();
	}

	public function defense()
	{
		$this->wjzf->FANGSHOU();
	}
}