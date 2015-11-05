<?php
class ConcreateIterator extends Iteratorx {

	private $aggregate;
	private $current = 0;

	public function __construct($aggregate)
	{
		$this->aggregate = $aggregate;
	}

	public function first()
	{
		return $this->aggregate->getThis(0);
	}

	public function next()
	{
		$ret = null;
		$this->current++;
		if($this->current < $this->aggregate->getCount())
		{
			$ret = $this->aggregate->getThis($this->current);
		}
		return $ret;
	}

	public function isDone()
	{
		return $this->current >= $this->aggregate->getCount() ? true : false;
	}

	public function currentItem()
	{
		return $this->aggregate->getThis($this->current);
	}
}