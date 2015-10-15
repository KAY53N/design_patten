<?php
class Finery extends Person {
	protected $compoent;

	public function __construct()
	{
		
	}
	
	public function decorate(Person $compoent)
	{
		$this->compoent = $compoent;
	}
	
	public function show()
	{
		if($this->compoent != null)
		{
			$this->compoent->show();
		}
	}
}