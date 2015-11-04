<?php
// 羊肉串命令
class BakeMuttonCommand extends Command {

	public $name = '羊肉串';

	public function excuteCommand()
	{
		$this->receiver->bakeMutton();
	}
}