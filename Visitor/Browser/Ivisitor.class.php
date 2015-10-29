<?php
/*
 * 访问者抽象接口
 */
interface Ivisitor {
	/*
	 * 电脑设备访问者类型访问，作用于具体元素的操作
	* @param PcBrowser $pc
	*/
	public function visitPcBrowser($pc);

	/*
	 * 手机设备访问者类型访问，作用于具体元素的操作
	* @param MbBrowser $mb
	*/
	public function visitMbBrowser($mb);
}
