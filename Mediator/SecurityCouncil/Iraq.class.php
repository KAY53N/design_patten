<?php
// 伊拉克
class Iraq extends Country {

	// 声明
	public function declarex($message)
	{
		$this->mediator->declarex($message, __CLASS__);
	}

	// 获得消息
	public function getMessage($message)
	{
		echo '伊拉克获得对方信息：'.$message.'<hr>';
	}
}