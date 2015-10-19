<?php
class Proxy implements GiveGift {
	private $gg;
	public function __construct($mm)
	{
		$this->gg = new Pursuit($mm);
	}

	public function giveDolls()
	{
		$this->gg->giveDolls();
	}

	public function giveFlowers()
	{
		$this->gg->giveFlowers();
	}

	public function giveChocolate()
	{
		$this->gg->giveChocolate();
	}
}