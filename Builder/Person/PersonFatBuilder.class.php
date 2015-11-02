<?php
class PersonFatBuilder extends PersonBuilder {

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
		imageellipse($this->img, 150, 150, 90, 100, 200);
	}

	public function buildArmLeft()
	{
		imageLine($this->img, 70, 160, 130, 100, 5);
	}

	public function buildArmRight()
	{
		imageLine($this->img, 230, 160, 170, 100, 5);
	}

	public function buildLegLeft()
	{
		imageLine($this->img, 130, 190, 130, 250, 5);
	}

	public function buildLegRight()
	{
		imageLine($this->img, 170, 190, 170, 250, 5);
	}

	public function show()
	{
		imagePng($this->img);
		imageDestroy($this->img);
		header('Content-type: image/png');
	}

}

