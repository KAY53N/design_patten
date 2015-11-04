<?php
// 抽象命令
abstract class Command {
	protected $receiver;

	public function command($receiver)
	{
		$this->receiver = $receiver;
	}

	// 执行命令
	abstract function excuteCommand();
}