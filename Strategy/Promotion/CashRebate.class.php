<?php
class CashRebate extends CashSuper {
	private $priceRebate = 0;
	public function __construct($monyRebate)
	{
		$this->priceRebate = $monyRebate;
	}

	public function acceptCash($money)
	{
		return sprintf("%1\$.2f", $money * $this->priceRebate);
	}
}