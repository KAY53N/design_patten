<?php
class ConCreateCompaly extends Company {

	private $children = array();

	public function add($c)
	{
		array_push($this->children, $c);
	}

	public function remove($c)
	{
		array_push($this->children, $c);
	}

	public function display($depath)
	{
		echo '<hr>' . str_repeat('-', $depath) . $this->name;
		foreach($this->children as $k=>$v)
		{
			$v->display($depath + 2);
		}
	}

	// 履行职责
	public function lineOfDuty()
	{
		foreach($this->children as $k=>$v)
		{
			$v->lineOfDuty();
		}
	}
}