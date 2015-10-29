<?php
/*
 * 具体元素实现
 * 浏览设备：电脑
 */
class PcBrowser extends Browser {
	public function accept($visitor)
	{
		$visitor->visitPcBrowser($this);
	}
}