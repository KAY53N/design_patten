<?php
//外籍中锋，只懂中文
class ForeignCenter {
	private $name;

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function JINGONG()
	{
		echo sprintf('外籍中锋 %s 进攻<hr>', $this->name);
	}

	public function FANGSHOU()
	{
		echo sprintf('外籍中锋 %s 防守<hr>', $this->name);
	}
}