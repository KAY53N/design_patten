<?php
class CashReturn extends CashSuper {
	private $monyCondition = 0;
	private $monyReturn = 0;

	public function __construct($condition, $monyReturn)
	{
		$this->monyCondition = $condition;
		$this->monyReturn = $monyReturn;
	}

	public function acceptCash($money)
	{
		if($money >= $this->monyCondition)
		{
			return $money - $this->monyReturn;
		}
		return $money;
	}
}