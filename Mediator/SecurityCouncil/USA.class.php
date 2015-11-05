<?php
// 美国
class USA extends Country {

	// 声明
	public function declarex($message)
	{
		$this->mediator->declarex($message, __CLASS__);
	}

	// 获得消息
	public function getMessage($message)
	{
		echo '美国获得对方信息：'.$message.'<hr>';
	}
}