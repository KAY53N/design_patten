<?php
class VolunteerFactory implements LFfactory {
	public function createLeiFeng()
	{
		return new Volunteer();
	}
}