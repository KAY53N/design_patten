<?php
abstract class AbstractUser implements User {
	private $name = '';
	protected $discount = 0;
	protected $grade = '';

	public function __construct($_name)
	{
		$this->setName($_name);
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($_name)
	{
		$this->name = $_name;
	}

	public function getDiscount()
	{
		return $this->discount;
	}

	public function getGrade()
	{
		return $this->grade;
	}
}