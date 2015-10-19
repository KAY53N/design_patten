<?php
class Pursuit implements GiveGift {
	private $mm;
	public function __construct($mm)
	{
		$this->mm = $mm;
	}

	public function giveDolls()
	{
		echo $this->mm->getName() . '送你洋娃娃<br>';
	}

	public function giveFlowers()
	{
		echo $this->mm->getName() . '送你鲜花<br>';
	}

	public function giveChocolate()
	{
		echo $this->mm->getName() . '送你巧克力<br>';
	}
}