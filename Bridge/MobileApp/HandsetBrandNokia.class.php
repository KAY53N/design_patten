<?php
class HandsetBrandNokia extends HandsetBrand {

	public $thisBrand = '诺基亚';

	public function run()
	{
		return $this->soft->run();
	}
}