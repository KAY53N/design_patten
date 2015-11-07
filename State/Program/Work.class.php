<?php
class Work {
	
	private $current;
	public $finish = false;
	public $hour = 0;


	public function __construct()
	{
		$this->current = new ForenoonState();
	}

	public function setState(State $s)
	{
		$this->current = $s;
	}

	function writeProgram()
	{
		$this->current->writeProgram($this);
	}
}

