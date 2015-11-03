<?php
abstract class Player {
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	abstract function attack();
	abstract function defense();
}