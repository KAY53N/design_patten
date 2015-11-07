<?php
// 下班休息状态
class RestState extends State {
	public function writeProgram(Work $w)
	{
		echo sprintf('当前时间：%s 点 下班回家了%s', $this->hour, PHP_EOL);
	}
}

