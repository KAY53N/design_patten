<?php
class PersonDirector {
	private $pb;
	public function __construct($pb)
	{
		$this->pb = $pb;
	}

	public function createPerson()
	{
		$this->pb->buildHead();
		$this->pb->buildBody();
		$this->pb->buildArmLeft();
		$this->pb->buildArmRight();
		$this->pb->buildLegLeft();
		$this->pb->buildLegRight();
		$this->pb->show();
	}
}


