<?php
class PersonThinBuilder extends PersonBuilder {

	public function __construct($width, $height)
	{
		$this->img = imageCreate ($width, $height);
		imagecolorallocate($this->img, 255, 255, 255);
	}

	public function buildHead()
	{
		imageArc($this->img, 150, 75, 50, 50, 0, 360, 200);
	}

	public function buildBody()
	{
		imageRectangle($this->img, 120, 100, 180, 180, 50);
	}

	public function buildArmLeft()
	{
		imageLine($this->img, 70, 160, 120, 100, 5);
	}

	public function buildArmRight()
	{
		imageLine($this->img, 230, 160, 180, 100, 5);
	}

	public function buildLegLeft()
	{
		imageLine($this->img, 130, 180, 130, 250, 5);
	}

	public function buildLegRight()
	{
		imageLine($this->img, 170, 180, 170, 250, 5);	
	}


	public function show()
	{
		imagePng($this->img);
		imageDestroy($this->img);
		header('Content-type: image/png');
	}
}

