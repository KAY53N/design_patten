<?php
class ConcreateAggregate extends Aggregate {

	private $items = array();

	public function createIterator()
	{
		return new ConcreateIterator();
	}

	public function getCount()
	{
		return count($this->items);
	}

	public function setThis($index, $value)
	{
		$this->items = array_merge($this->items, array($index=>$value));
	}

	public function getThis($index)
	{
		return $this->items[$index];
	}
}