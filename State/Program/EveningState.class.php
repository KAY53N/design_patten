<?php
// 晚间工作状态
class EveningState extends State {
	public function writeProgram(Work $w)
	{
		if($w->finish)
		{
			$w->setState(new RestState());
			$w->writeProgram();
		}
		else
		{
			if($w->hour < 21)
			{
				echo sprintf('当前时间：%s 点 加班哦，疲惫至极%s', $w->hour, PHP_EOL);
			}
			else
			{
				$w->setState(new SleepingState());
				$w->writeProgram();
			}
		}
	}
}

