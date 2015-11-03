<?php
class Fund {
	public $gu1, $gu2, $gu3, $nationalDebt1, $realty1;

	public function __construct()
	{
		$this->gu1 = new Stock1();
		$this->gu2 = new Stock2();
		$this->gu3 = new Stock3();
		$this->nationalDebt1 = new NationalDebt1();
		$this->realty1 = new Realty1();
	}

	public function buyFund()
	{
		$this->gu1->buy();
		$this->gu2->buy();
		$this->gu3->buy();
		$this->nationalDebt1->buy();
		$this->realty1->buy();
	}

	public function sellFund()
	{
		$this->gu1->sell();
		$this->gu2->sell();
		$this->gu3->sell();
		$this->nationalDebt1->sell();
		$this->realty1->sell();
	}
}