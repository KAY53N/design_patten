<?php
// 烤肉者
class Barbecuer {

	private $stock;

	// 设置需要查询的仓库
	public function setStock($stock)
	{
		$this->stock = $stock;
	}

	// 烤羊肉
	public function bakeMutton()
	{
		echo '厨师开始烤羊肉串！<hr>';
	}

	// 烤鸡翅
	public function bakeChickenWing()
	{
		echo '厨师开始烤鸡翅！<hr>';
	}
}