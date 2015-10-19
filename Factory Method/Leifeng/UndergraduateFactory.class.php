<?php
class UndergraduateFactory implements LFfactory {
	public function createLeiFeng()
	{
		return new Undergraduate();
	}
}