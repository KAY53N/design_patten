<?php
// 前锋
class Forwards extends Player {
	public function attack()
	{
		echo sprintf('前锋 %s 进攻<hr>', $this->name);
	}

	public function defense()
	{
		echo sprintf('前锋 %s 防守<hr>', $this->name);
	}
}