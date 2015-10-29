<?php
/*
 * 具体访问者类实现
 * 设备来源分析
 */
class EquipmentAnalyze implements Ivisitor {
	/*
	 * 电脑设备来源
	*/
	public function visitPcBrowser($pc)
	{
		echo '电脑访问， 浏览器是'.$pc->name.'<hr>';
	}

	/*
	 * 手机设备来源
	*/
	public function visitMbBrowser($mb)
	{
		echo '手机访问，浏览器是'.$mb->name.'<hr>';
	}
}