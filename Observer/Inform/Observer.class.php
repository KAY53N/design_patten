<?php
abstract class Observer {
	protected $name, $sub;

	public function __construct($name, $sub)
	{
		$this->name = $name;
		$this->sub = $sub;
	}

	abstract function update();
}

