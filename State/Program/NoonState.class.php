<?php
// 中午工作状态
class NoonState extends State {
	public function writeProgram(Work $w)
	{
		if($w->hour < 13)
		{
			echo sprintf('当前时间：%s 点 饿了，午饭；犯困，午休。%s', $w->hour, PHP_EOL);
		}
		else
		{
			$w->setState(new AfternoonState());
			$w->writeProgram();
		}
	}
}

