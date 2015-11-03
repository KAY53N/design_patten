<?php
// 后卫
class Guards extends Player {
	public function attack()
	{
		echo sprintf('后卫 %s 进攻<hr>', $this->name);
	}

	public function defense()
	{
		echo sprintf('后卫 %s 防守<hr>', $this->name);
	}
}