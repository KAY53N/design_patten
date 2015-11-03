<?php
// 中锋
class Center extends Player {
	public function attack()
	{
		echo sprintf('中锋 %s 进攻<hr>', $this->name);
	}

	public function defense()
	{
		echo sprintf('中锋 %s 防守<hr>', $this->name);
	}
}