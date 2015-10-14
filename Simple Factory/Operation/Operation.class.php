<?php
/*
 * 简单工厂设计模式【计算器】
 * Author: Kaysen
 */
class Operation {
	protected $numberA, $numberB;
	
	public function setNumberA($num)
	{
		$this->numberA = $num;
	}
	
	public function setNumberB($num)
	{
		$this->numberB = $num;
	}
	
	public function getResult()
	{
		$result = 0;
		return $result;
	}
}