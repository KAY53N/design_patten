<?php
// 下午和傍晚工作状态类
class AfternoonState extends State {
	public function writeProgram(Work $w)
	{
		if($w->hour < 17)
		{
			echo sprintf('当前时间：%s 点 下午状态还不错，继续努力%s', $w->hour, PHP_EOL);
		}
		else
		{
			echo $w->setState(new EveningState());
			$w->writeProgram();
		}	
	}
}

