<?php
// 上午工作状态
class ForenoonState extends State {
	public function writeProgram(Work $w)
	{
		if($w->hour < 12)
		{
			echo sprintf('当前时间：%s 点 上午工作，精神百倍%s', $w->hour, PHP_EOL);
		}
		else
		{
			$w->setState(new NoonState());
			$w->writeProgram();
		}
	}
}

