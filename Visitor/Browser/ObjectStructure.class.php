<?php
/*
 * 结构对象
 * 作用：管理访问者，提供访问元素接口
 */
class ObjectStructure {

	public $visitor = array();

	public function addVisitor($visitor)
	{
		if(is_object($visitor))
		{
			$this->visitor[spl_object_hash($visitor)] = $visitor;
		}
	}

	public function delVistor($visitor)
	{
		if(is_object($visitor))
		{
			unset($this->visitor[spl_object_hash($visitor)]);
		}
	}

	public function handle($visitor)
	{
		foreach($this->visitor as $val)
		{
			$val->accept($visitor);
		}
	}
}