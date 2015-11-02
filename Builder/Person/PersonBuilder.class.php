<?php
abstract class PersonBuilder {
	protected $img;

	abstract function __construct($width, $height);

	abstract function buildHead();
	abstract function buildBody();

	abstract function buildArmLeft();
	abstract function buildArmRight();

	abstract function buildLegLeft();
	abstract function buildLegRight();

	abstract function show();
}
