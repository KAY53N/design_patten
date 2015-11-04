<?php
// 烤鸡翅命令
class BakeChickenWingCommand extends Command {

	public $name = '鸡翅';

	public function excuteCommand()
	{
		$this->receiver->bakeChickenWing();
	}
}