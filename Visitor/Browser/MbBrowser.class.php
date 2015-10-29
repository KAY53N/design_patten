<?php
/*
 * 具体元素实现
 * 浏览设备：手机
 */
class MbBrowser extends Browser {
	public function accept($visitor)
	{
		$visitor->visitMbBrowser($this);
	}
}
