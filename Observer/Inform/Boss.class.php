<?php
class Boss implements Subject {
	// 同事列表
	private $observers = array();
	private $action;

	// 增加
	public function attach($observer)
	{
		$this->observers = array_merge($this->observers, array(spl_object_hash($observer)=>$observer));
	}
	
	// 减少
	public function detach($observer)
	{
		unset($this->observers[spl_object_hash($observer)]);
	}

	// 通知
	public function notify()
	{
		foreach($this->observers as $val)
		{
			$val->update();
		}
	}

	// 老板状态
	public function setSubjectStatus($value)
	{
		$this->action = $value;
	}

	public function getSubjectStatus()
	{
		return $this->action;
	}
}

