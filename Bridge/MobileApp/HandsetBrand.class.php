<?php
abstract class HandsetBrand {

	protected $soft;

	public function setHandsetSoft($soft)
	{
		$this->soft = $soft;
	}

	abstract function run();
}