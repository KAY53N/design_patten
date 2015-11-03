<?php
class HandsetBrandMotorola extends HandsetBrand {

	public $thisBrand = '摩托罗拉';

	public function run()
	{
		return $this->soft->run();
	}
}