<?php
// 睡眠状态
class SleepingState extends State {
	public function writeProgram(Work $w)
	{
		echo sprintf('当前时间：%s 点 不行了，睡着了%s', $w->hour, PHP_EOL);
	}
}

